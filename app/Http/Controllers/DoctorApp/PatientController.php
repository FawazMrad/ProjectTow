<?php

namespace App\Http\Controllers\DoctorApp;

use App\Http\Controllers\Controller;
use App\Services\PatientService;
use Illuminate\Http\Request;


class PatientController extends Controller
{
    protected PatientService $patientService;
    public function __construct(PatientService $patientService)
    {
        $this->patientService = $patientService;
    }
    public function getPatient($id){
        $patientId=$id;
        $data=$this->patientService->getPatient($patientId);
        return response()->json($data,200);
    }
}
