<?php

namespace App\Services;

use App\Models\WeeklySchedule;
use App\Repositories\Interfaces\AppointmentRepositoryInterface;
use App\Repositories\Interfaces\NotificationRepositoryInterface;
use App\Repositories\Interfaces\WeeklyScheduleRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Support\Collection;
class WeeklyScheduleService
{

    protected WeeklyScheduleRepositoryInterface $weeklyScheduleRepository;
    protected AppointmentRepositoryInterface $appointmentRepository;
    protected NotificationRepositoryInterface $notificationRepository;

    public function __construct(WeeklyScheduleRepositoryInterface $weeklyScheduleRepository, AppointmentRepositoryInterface $appointmentRepository, NotificationRepositoryInterface $notificationRepository)
    {
        $this->weeklyScheduleRepository = $weeklyScheduleRepository;
        $this->appointmentRepository = $appointmentRepository;
        $this->notificationRepository = $notificationRepository;

    }

    public function updateWeeklySchedule(int $weeklyScheduleId, array $newScheduleData): bool
    {
        $schedule = $this->weeklyScheduleRepository->findById($weeklyScheduleId);

        $dayOfWeek = $schedule->day_of_week;

        $doctorId = $schedule->doctor_id;

        $conflicts = $this->appointmentRepository->getConflictingAppointments($doctorId, $dayOfWeek, $newScheduleData);

        if ($conflicts->isNotEmpty()) {
            $this->notifyReception($conflicts,$doctorId);
            $this->weeklyScheduleRepository->update($weeklyScheduleId, $newScheduleData);
          return false;
        }

        return $this->weeklyScheduleRepository->update($weeklyScheduleId, $newScheduleData);
    }

    protected function notifyReception(Collection $conflicts,$doctorId): void
    {
        $conflictsByPatient = $conflicts->groupBy('patient_id');

        foreach ($conflictsByPatient as $patientId => $patientConflicts) {
            // Get first appointment to access patient details (assuming all conflicts are for same patient)
            $firstAppointment = $patientConflicts->first();
            $patientName = $firstAppointment->patient->full_name; // Assuming relationship exists

            $body = $patientConflicts->map(function ($appt) {
                $date = $appt->start_time; // Format date as needed
                $time = $appt->start_time;    // Format time as needed
                return "• الموعد رقم {$appt->id} المقرر في تاريخ {$date} الساعة {$time}";
            })->implode("\n");

            $this->notificationRepository->create([
                'user_id' => null,
                'sender_id'=>$doctorId,
                'patient_id' => $patientId,
                'appointment_id' => $firstAppointment->id,
                'title' => "تنبيه بوجود تعارض في المواعيد",
                'body' => "السادة الموظفون في الاستقبال،

يوجد تعارض في المواعيد التالية للمريض/المريضة {$patientName}:

{$body}

الرجاء التواصل مع المريض/المريضة لتعديل المواعيد المتعارضة.

مع خالص الشكر والتقدير",
                'channel' => 'IN_APP',
                'status' => 'انتظار',
                'is_scheduled' => false,
                'is_reception_notification' => true,
                'sent_at' => Carbon::now(),
            ]);
        }
    }
    public function getWorkDays()
    {
        return $this->weeklyScheduleRepository->getWorkDays();
    }

}

