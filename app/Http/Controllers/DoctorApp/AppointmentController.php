<?php

namespace App\Http\Controllers\DoctorApp;

use App\Services\AppointmentImageService;
use App\Services\AppointmentService;
use App\Services\NotificationService;
use App\Services\UserService;
use Illuminate\Http\Request;


class AppointmentController
{
    protected UserService $doctorService;
    protected AppointmentService $appointmentService;
    protected AppointmentImageService $appointmentImageService;
    protected NotificationService $notificationService;

    public function __construct(UserService $doctorService, AppointmentService $appointmentService, AppointmentImageService $appointmentImageService, NotificationService $notificationService)
    {
        $this->doctorService = $doctorService;
        $this->appointmentService = $appointmentService;
        $this->appointmentImageService = $appointmentImageService;
        $this->notificationService = $notificationService;
    }

    public function viewTodayAppointments(Request $request)
    {
        $doctor = $request->user();
        $data = $this->appointmentService->getDoctorTodayAppointments($doctor);
        if ($data == null) {
            return response()->json(["message" => "No appointments found"], 404);
        }
        return response()->json($data, 200);
    }

    public function viewUpcomingAppointments(Request $request)
    {
        $doctor = $request->user();
        $data = $this->appointmentService->getDoctorUpcomingAppointments($doctor);
        if ($data == null) {
            return response()->json(["message" => "No appointments found"], 404);
        }
        return response()->json($data, 200);
    }

    public function viewAppointment(Request $request)
    {
        $doctorId = $request->user()->id;
        $appointmentId = $request->appointment_id;
        $data = $this->appointmentService->getAppointment($doctorId, $appointmentId);
        return response()->json($data, 200);
    }

    public function updateAppointment(Request $request)
    {
        $appointmentId = $request->appointment_id;
        $data = $request->data;
        $result = $this->appointmentService->updateAppointment($appointmentId, $data);
        if ($result == null) {
            return response()->json(["message" => "Appointment not updated"], 404);
        }
        return response()->json(["message" => "Appointment  updated"], 200);
    }
   public function scheduleAppointment(Request $request)
   {
       $appointmentId=$request->appointment_id;
       $date=$request->date;
       $this->notificationService->createSchedualedAppointmentNotificatoin( $appointmentId, $date);
       return response()->json(["message" => "Appointment scheduled"], 200);


   }
    public function addImagesToAppointment(Request $request)
    {
        $validated = $request->validate([
            'appointment_id' => 'required|exists:appointments,id',
            'images' => 'required|array',
            'images.*.image' => 'required|string',
            'images.*.image_notes' => 'nullable|string',
        ]);

        $appointmentId = $validated['appointment_id'];
        $images = $validated['images'];

        $this->appointmentImageService->addImagesToAppointment($appointmentId, $images);

        return response()->json(['message' => 'Images added successfully.']);
    }

}
