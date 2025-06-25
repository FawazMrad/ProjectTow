<?php

namespace App\Http\Controllers\DoctorApp;

use App\Services\AppointmentService;
use App\Services\UserService;
use App\Services\WeeklyScheduleService;
use Database\Seeders\AppointmentSeeder;
use Illuminate\Http\Request;


class AppointmentController
{
    protected UserService $doctorService;
    protected AppointmentService $appointmentService;

    public function __construct(UserService $doctorService, AppointmentService $appointmentService)
    {
        $this->doctorService = $doctorService;
        $this->appointmentService = $appointmentService;
    }
 public function viewTodayAppointments(Request $request){
     $doctor=$request->user();
     $data=$this->appointmentService->getDoctorTodayAppointments($doctor);
     if($data==null){
         return response()->json(["message"=>"No appointments found"],404);
     }
     return response()->json($data,200);
 }
 public function viewUpcomingAppointments(Request $request){
     $doctor=$request->user();
     $data=$this->appointmentService->getDoctorUpcomingAppointments($doctor);
     if($data==null){
         return response()->json(["message"=>"No appointments found"],404);
     }
     return response()->json($data,200);
 }
 public function viewAppointment(Request $request){
        $doctorId=$request->user()->id;
        $appointmentId=$request->appointment_id;
        $data=$this->appointmentService->getAppointment($doctorId,$appointmentId);
        return response()->json($data,200);
 }
 public function cancelAppointment(Request $request){
  $doctorId=$request->user()->id;
  $appointmentId=$request->appointment_id;
  $result=$this->appointmentService->cancelAppointment($doctorId,$appointmentId);
  if($result==null){
      return response()->json(["message"=>"Appointment not cancelled"],404);
  }
  return response()->json(["message"=>"Appointment  cancelled"],200);
 }

}
