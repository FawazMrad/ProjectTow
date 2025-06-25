<?php

namespace App\Services;

use App\Repositories\Interfaces\AppointmentRepositoryInterface;
use App\Repositories\Interfaces\NotificationRepositoryInterface;
use App\Repositories\Interfaces\WeeklyScheduleRepositoryInterface;
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
            $this->notifyReception($conflicts);
            $this->weeklyScheduleRepository->update($weeklyScheduleId, $newScheduleData);
          return false;
        }

        return $this->weeklyScheduleRepository->update($weeklyScheduleId, $newScheduleData);
    }

    protected function notifyReception(Collection $conflicts): void
    {
        $conflictsByPatient = $conflicts->groupBy('patient_id');

        foreach ($conflictsByPatient as $patientId => $patientConflicts) {
            $body = $patientConflicts->map(function ($appt) {
                $date = $appt->start_time;
                $time = $appt->start_time;
                return "• الموعد رقم {$appt->id} المقرر في {$date} الساعة {$time}";
            })->implode("\n");

            $this->notificationRepository->create([
                'user_id' => null,
                'patient_id' => $patientId,
                'title' => "تنبيه بوجود تعارض في المواعيد",
                'body' => "عزيزي الموظف، يوجد تعارض في المواعيد التالية:\n{$body}\n\nالرجاء التواصل مع المريض لتعديل الموعد.",
                'channel' => 'IN_APP',
                'status' => 'انتظار',
                'is_scheduled' => false,
                'is_reception_notification' => true,
                'sent_at' => null,
            ]);
        }
    }

}

