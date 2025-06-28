<?php

namespace App\Http\Controllers\DoctorApp;

use App\Http\Controllers\Controller;
use App\Services\AppointmentImageService;
use Illuminate\Http\Request;

class AppointmentImageController extends Controller
{
    protected AppointmentImageService $appointmentImageService;
    public function __construct(AppointmentImageService $appointmentImageService){
        $this->appointmentImageService = $appointmentImageService;
    }
    public function viewAppointmentImages(Request $request,$id)
    {
        $doctorId = $request->user()->id;
        $appointmentId = $id;
        $data = $this->appointmentImageService->getAppointmentImages($doctorId, $appointmentId);
        if($data)
            return response()->json($data, 200);

        return response()->json("There is no images for this", 404);
    }
}
