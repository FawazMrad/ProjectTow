<?php

namespace App\Repositories;

use App\Models\Appointment;
use App\Models\User;
use App\Repositories\Interfaces\AppointmentRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Helpers\ArabicHelper;
class AppointmentRepository implements AppointmentRepositoryInterface
{
    protected UserRepositoryInterface $userRepository;
    public function __construct(UserRepositoryInterface $userRepository){
        $this->userRepository = $userRepository;
    }
    public function all(): iterable
    {
        return Appointment::all();
    }

    public function findById(int $id): ?Appointment
    {
        return Appointment::find($id);
    }

    public function findByPatient(int $patientId): iterable
    {
        return Appointment::where('patient_id', $patientId)->get();
    }

    public function findByDoctor(int $doctorId): iterable
    {
        return Appointment::where('doctor_id', $doctorId)->get();
    }

    public function findByStatus(string $status): iterable
    {
        return Appointment::where('status', $status)->get();
    }

    public function create(array $data): Appointment
    {
        return Appointment::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $appointment = Appointment::find($id);
        return $appointment ? $appointment->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $appointment = Appointment::find($id);
        return $appointment ? $appointment->delete() : false;
    }

    public function getConflictingAppointments(int $doctorId, string $dayOfWeek, array $newScheduleData): Collection
    {
        $dates = collect(range(0, 13))
            ->map(fn($i) => Carbon::today()->copy()->addDays($i))
            ->filter(fn($date) => $this->getArabicDayName($date->dayOfWeek) === $dayOfWeek)
            ->map(fn($d) => $d->toDateString());

        $query = Appointment::query()
            ->where('doctor_id', $doctorId)
            ->whereIn('status', ['معلق', 'مقبول','مؤجل'])
            ->whereIn(DB::raw('DATE(start_time)'), $dates);

        if (isset($newScheduleData['is_active']) && !$newScheduleData['is_active']) {
            return $query->get();
        }

        $start = $newScheduleData['start_time'] ?? '00:00:00';
        $end = $newScheduleData['end_time'] ?? '23:59:59';
        $breakStart = $newScheduleData['break_start_time'] ?? null;
        $breakEnd = $newScheduleData['break_end_time'] ?? null;

        return $query->where(function ($q) use ($start, $end, $breakStart, $breakEnd) {
            $q->whereTime('start_time', '<', $start)
                ->orWhereTime('end_time', '>', $end);

            if ($breakStart && $breakEnd) {
                $q->orWhere(function ($q2) use ($breakStart, $breakEnd) {
                    $q2->whereTime('start_time', '>=', $breakStart)
                        ->whereTime('start_time', '<', $breakEnd);
                });
            }
        })->get();
    }

    protected function getArabicDayName(int $dayIndex): string
    {
        return [
            'الاحد',     // 0
            'الاثنين',   // 1
            'الثلاثاء',  // 2
            'الاربعاء',  // 3
            'الخميس',    // 4
            'الجمعة',    // 5
            'السبت',     // 6
        ][$dayIndex];
    }
    public function getAppointment(int $doctorId,int $appointmentId)
    {
        return $this->userRepository->findById($doctorId)->doctorAppointments()->with('patient')->find($appointmentId);
    }
    public function getDoctorTodayAppointments(User $doctor)
    {
        $startOfDay = Carbon::today()->startOfDay();
        $endOfDay = Carbon::today()->endOfDay();

        return $doctor->doctorAppointments()->with('patient')
            ->whereBetween('start_time', [$startOfDay, $endOfDay])
            ->where('status', Appointment::$statusMap['accepted'])
            ->get()->sortBy('start_time');
    }
    public function getDoctorUpcomingAppointments(User $doctor)
    {
        $startOfDay = Carbon::today()->startOfDay();


        return $doctor->doctorAppointments()->with('patient')
            ->where('start_time', '>=',$startOfDay)
            ->get()->sortBy('start_time')
            ->groupBy('status');
    }
    public function getAppointmentPatient(int $appointmentId)
    {
        $appointment = $this->findById($appointmentId);
        return $appointment->patient()->first();
    }

    public function getParentAppointment($doctorId, $appointmentId)
    {
        $parents = [];

        $current = $this->findById($appointmentId);

        if (!$current || $current->doctor_id !== $doctorId) {
            return null;
        }

        while ($current && $current->parentAppointment()->first()) {
            $parent = $current->parentAppointment()->first();

            // Optional: Make sure the parent belongs to same doctor
            if ($parent->doctor_id !== $doctorId) {
                break;
            }

            $parents[] = $parent;

            $current = $parent;
        }

        return $parents;
    }

}
