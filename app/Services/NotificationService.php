<?php

namespace App\Services;

use App\Repositories\Interfaces\AppointmentRepositoryInterface;
use App\Repositories\Interfaces\NotificationRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Support\Collection;

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
        ];
        return $this->notificationRepository->create($data);
    }
    public function notifyReceptionAboutAppointmentConflicts(Collection $conflicts,$doctorId): void
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
                'is_reception_notification' => true
            ]);
        }
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
        ]);
    }

    public function notifyReception( $appointmentId, $numberOfDays,$doctorId): void
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
        ]);
    }


    public function getDoctorNotifications($doctorId)
    {
        return $data=$this->notificationRepository->findByUser($doctorId);
    }
    public function getNotification($notificationId)
    {
        $notification=$this->notificationRepository->findById($notificationId);
        $this->notificationRepository->markAsRead($notification);
        return $notification;
    }

}
