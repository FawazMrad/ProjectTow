<?php

namespace App\Services;

use App\Helpers\DateTimeHelper;
use App\Models\AttendanceLog;
use App\Models\User;
use App\Models\WeeklySchedule;
use App\Repositories\Interfaces\AttendanceLogRepositoryInterface;
use Illuminate\Support\Carbon;

class AttendanceLogService
{
    protected AttendanceLogRepositoryInterface $attendanceRepo;

    public function __construct(AttendanceLogRepositoryInterface $attendanceRepo)
    {
        $this->attendanceRepo = $attendanceRepo;
    }

    public function logCheckIn(User $user,$userType)
    {
        $now       = Carbon::now();
        $arabicDay = $this->arabicDayName($now);
        $schedule = WeeklySchedule::where('doctor_id', 1)
            ->where('day_of_week', $arabicDay)
            ->where('is_active', true)
            ->first();


        if (!$schedule) {
            return false;
        }

        $scheduledStart = Carbon::createFromTimeString($schedule->start_time);
        $twoHoursBefore = $scheduledStart->copy()->subHours(2);
        $twentyMinutesAfter = $scheduledStart->copy()->addMinutes(20);

        // Determine status
        $status = 'تأخير'; // Default to "late" (if none of the conditions below match)

        if ($now->between($twoHoursBefore, $twentyMinutesAfter)) {
            // If check-in is within 2 hours before or 20 minutes after the start time
            $status = 'حضور';
        }


        if ($now->lessThan($twoHoursBefore)) {
            return false;
        }

        $this->attendanceRepo->create([
            'user_id'   => $user->id,
            'status'    => $status,
            'check_in'  => $now,
            'user_type' => $userType,
            'is_swapped'=> false,
        ]);
        return true;
    }

    public function markDoctorAbsences(): void
    {
        $today      = Carbon::today();
        $arabicDay  = $this->arabicDayName($today);

        // كل الجداول المفعّلة لليوم
        $schedules = WeeklySchedule::where('day_of_week', $arabicDay)
            ->where('is_active', true)
            ->get();

        foreach ($schedules as $schedule) {
            $doctorId = $schedule->doctor_id;

            // إذا لم يسجّل حضور نهار اليوم ‑ أضف غياب
            if (!$this->attendanceRepo->hasCheckIn($doctorId, $today)) {
                $this->attendanceRepo->create([
                    'user_id'   => $doctorId,
                    'status'    => 'غياب',
                    'check_in'  => null,
                    'user_type' => 'DOCTOR',
                    'is_swapped'=> false,
                    'created_at'=> $today->endOfDay(),
                    'updated_at'=> $today->endOfDay(),
                ]);
            }
        }
    }
    public function logLogout(User $user): void
    {

        $log =$this->attendanceRepo->findByUserIdAndDate($user);

        if (!$log) {
            return;
        }

        $now = Carbon::now();
        $log->check_out = $now;

        if (in_array($user->role, ['DOCTOR', 'RECEPTIONIST'])) {
            $schedule = WeeklySchedule::where('doctor_id', $user->id)
                ->where('day_of_week', $this->arabicDayName($now))
                ->where('is_active', true)
                ->first();

            if ($schedule) {
                $scheduledEnd = Carbon::createFromTimeString($schedule->end_time);
                $ninetyMinutesBeforeEnd = $scheduledEnd->copy()->subMinutes(90);
                if ($now->lessThan($ninetyMinutesBeforeEnd)) {
                    $log->status = 'تأخير';
                }
            }
        }

        $log->save();
    }

    private function arabicDayName(Carbon $date): string
    {
        return [
            'Saturday'  => 'السبت',
            'Sunday'    => 'الاحد',
            'Monday'    => 'الاثنين',
            'Tuesday'   => 'الثلاثاء',
            'Wednesday' => 'الاربعاء',
            'Thursday'  => 'الخميس',
            'Friday'    => 'الجمعة',
        ][$date->englishDayOfWeek];
    }

    public function getReceptionistCommitmentThisMonth(): array
    {
        $dateRange = DateTimeHelper::getLastMonthRange();
        $startOfMonth = $dateRange['start']->format('Y-m-d');
        $endOfMonth = $dateRange['end']->format('Y-m-d');

        $doctorLogs = $this->attendanceRepo->getLogsByTypeAndDateRange('DOCTOR', $startOfMonth, $endOfMonth);
        $totalDoctorDays = $doctorLogs->count();


        $receptionistLogs = $this->attendanceRepo->getLogsByTypeAndDateRange('RECEPTIONIST', $startOfMonth, $endOfMonth);

        $grouped = $receptionistLogs->groupBy('user_id');

        $results = [];

        foreach ($grouped as $userId => $logs) {
            $user = $logs->first()->user;

            $workDays = $logs->whereNotIn('status', ['ABSENT'])->count();
            $absentDays = $logs->where('status', 'ABSENT')->count();
            $swappedDays = $logs->where('status', 'SWAPPED')->count();
            $lateDays = $logs->where('status', 'LATE')->count();

            $percentage = $totalDoctorDays > 0
                ? round(($workDays / $totalDoctorDays) * 100, 2)
                : 0;

            $results[] = [
                'name' => $user->user_name,
                'work_days' => $workDays,
                'absent_days' => $absentDays,
                'swapped_days' => $swappedDays,
                'late_days' => $lateDays,
                'commitment_percentage' => $percentage,
            ];
        }

        return $results;
    }

}
