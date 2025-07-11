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
    protected NotificationService $notificationService;

    public function __construct(WeeklyScheduleRepositoryInterface $weeklyScheduleRepository, AppointmentRepositoryInterface $appointmentRepository, NotificationRepositoryInterface $notificationRepository, NotificationService $notificationService)
    {
        $this->weeklyScheduleRepository = $weeklyScheduleRepository;
        $this->appointmentRepository = $appointmentRepository;
        $this->notificationRepository = $notificationRepository;
        $this->notificationService = $notificationService;

    }

    public function updateWeeklySchedule(int $weeklyScheduleId, array $newScheduleData): bool
    {
        $schedule = $this->weeklyScheduleRepository->findById($weeklyScheduleId);

        $dayOfWeek = $schedule->day_of_week;

        $doctorId = $schedule->doctor_id;

        $conflicts = $this->appointmentRepository->getConflictingAppointments($doctorId, $dayOfWeek, $newScheduleData);

        if ($conflicts->isNotEmpty()) {
            $this->notificationService->notifyReceptionAboutAppointmentConflicts($conflicts,$doctorId);
            $this->weeklyScheduleRepository->update($weeklyScheduleId, $newScheduleData);
          return false;
        }

        return $this->weeklyScheduleRepository->update($weeklyScheduleId, $newScheduleData);
    }

    public function getWorkDays()
    {
        return $this->weeklyScheduleRepository->getWorkDays();
    }

}

