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

    public function __construct(AppointmentRepositoryInterface $appointmentRepository, NotificationRepositoryInterface $notificationRepository)
    {
        $this->appointmentRepository = $appointmentRepository;
        $this->notificationRepository = $notificationRepository;
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
        $this->notifyReception($appointmentId,$numberOfDays,$doctorId);
        return true;

    }
    protected function notifyReception( $appointmentId, $numberOfDays,$doctorId): void
    {
        $patientName = $this->appointmentRepository->getAppointmentPatient($appointmentId)->full_name;

        $body = "السادة الموظفون في الاستقبال،


يرجى التواصل مع المريض/المريضة {$patientName} لإعلامه/إعلامها بتأجيل الموعد المحدد بمقدار {$numberOfDays} أيام.

مع خالص الشكر والتقدير";

        $this->notificationRepository->create([
            'user_id' => null,
            'sender_id'=>$doctorId,
            'patient_id' => $this->appointmentRepository->getAppointmentPatient($appointmentId)->id,
            'appointment_id' => $appointmentId,
            'title' => "تنبيه بوجود موعد يحتاج تأجيل",
            'body' => $body,
            'channel' => 'IN_APP',
            'status' => 'انتظار',
            'is_scheduled' => false,
            'is_reception_notification' => true,
            'sent_at' => Carbon::now(),
        ]);
    }
    public function notifyReceptionForRejection( $appointmentId,$doctorId ): void
    {
        $patientName = $this->appointmentRepository->getAppointmentPatient($appointmentId)->full_name;

        $body = "السادة الموظفون في الاستقبال،


يرجى التواصل مع المريض/المريضة {$patientName} لإعلامه/إعلامها بالغاء الموعد المحدد .

مع خالص الشكر والتقدير";

        $this->notificationRepository->create([
            'user_id' => null,
            'sender_id'=>$doctorId,
            'patient_id' => $this->appointmentRepository->getAppointmentPatient($appointmentId)->id,
            'appointment_id' => $appointmentId,
            'title' => "تنبيه بوجود موعد يحتاج الفاء",
            'body' => $body,
            'channel' => 'IN_APP',
            'status' => 'انتظار',
            'is_scheduled' => false,
            'is_reception_notification' => true,
            'sent_at' => Carbon::now(),
        ]);
    }
}
