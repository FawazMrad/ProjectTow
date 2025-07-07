<?php

namespace App\Services;

use App\Repositories\Interfaces\AppointmentRepositoryInterface;
use App\Repositories\Interfaces\NotificationRepositoryInterface;

class NotificationService
{
    protected AppointmentRepositoryInterface $appointmentRepository;
    protected NotificationRepositoryInterface $notificationRepository;

    public function __construct(NotificationRepositoryInterface $notificationRepository, AppointmentRepositoryInterface $appointmentRepository)
    {
        $this->notificationRepository = $notificationRepository;
        $this->appointmentRepository = $appointmentRepository;
    }
    public function createSchedualedAppointmentNotificatoin($appointmentId, $days,$doctorId)
    {
        $patient = $this->appointmentRepository->getAppointmentPatient($appointmentId);
        $patientId = $patient->id;
        $patientName = $patient->full_name;

        $data = [
            "patient_id" => $patientId,
            "sender_id"=>$doctorId,
            "appointment_id" => $appointmentId,
            "title" => "تنبيه بخصوص جدولة موعد",
            "body" => "يرجى جدولة موعد بعد  ($days) للمريض  ايام ($patientName).",
            "channel" => "IN_APP",
            "status" => "انتظار",
            "is_reception_notification" => true ,
            "sent_at" => now(),
        ];
        return $this->notificationRepository->create($data);
    }

}
