<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\Interfaces\AppointmentRepositoryInterface;
use App\Repositories\Interfaces\NotificationRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class AppointmentService
{
    protected AppointmentRepositoryInterface $appointmentRepository;
    protected NotificationRepositoryInterface $notificationRepository;
    protected NotificationService $notificationService;
    public function __construct(AppointmentRepositoryInterface $appointmentRepository, NotificationRepositoryInterface $notificationRepository, NotificationService $notificationService)
    {
        $this->appointmentRepository = $appointmentRepository;
        $this->notificationRepository = $notificationRepository;
        $this->notificationService = $notificationService;
    }
    public function getAppointment($doctorId,$appointmentId)
    {
        return $this->appointmentRepository->getAppointment($doctorId,$appointmentId);
    }
    public function getParentAppointment($doctorId,$appointmentId)
    {
        return $this->appointmentRepository->getParentAppointment($doctorId,$appointmentId);
    }

    public function getDoctorTodayAppointments(User $doctor){
        return $data=$this->appointmentRepository->getDoctorTodayAppointments($doctor);
    }

    public function getDoctorUpcomingAppointments(mixed $doctor)
    {
        return $data=$this->appointmentRepository->getDoctorUpcomingAppointments($doctor);

    }

    public function updateAppointment($appointmentId,$data)
    {
        return $this->appointmentRepository->update($appointmentId,$data);
    }
    public function delayAppointment( $appointmentId, $numberOfDays,$doctorId)
    {
        $this->notificationService->notifyReception($appointmentId,$numberOfDays,$doctorId);
        return true;

    }
}
