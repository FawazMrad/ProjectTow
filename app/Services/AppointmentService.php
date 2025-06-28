<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\Interfaces\AppointmentRepositoryInterface;

class AppointmentService
{
    protected AppointmentRepositoryInterface $appointmentRepository;

    public function __construct(AppointmentRepositoryInterface $appointmentRepository)
    {
        $this->appointmentRepository = $appointmentRepository;
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
}
