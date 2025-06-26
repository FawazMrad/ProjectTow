<?php

namespace App\Http\Controllers\DoctorApp;

use App\Http\Controllers\Controller;
use App\Services\MedicalStudyService;
use App\Services\PatientService;
use Illuminate\Http\Request;

class MedicalStudyController extends Controller
{
    protected MedicalStudyService $medicalStudyService;
    protected PatientService $patientService;
    public function __construct(MedicalStudyService $medicalStudyService, PatientService $patientService)
    {
        $this->medicalStudyService = $medicalStudyService;
        $this->patientService = $patientService;
    }
    public function index(Request $request)
    {
        $user=$request->user();
        $data=$this->medicalStudyService->getMedicalStudies($user);
        if($data==null){
            return response()->json(["message"=>"There are no medical studies yet"],404);
        }
        return response()->json($data,200);
    }
    public function getMedicalStudy(Request $request,$id){
        $user=$request->user();
        $medicalStudyId=$id;
        return $this->medicalStudyService->getMedicalStudy($user,$medicalStudyId);

    }

    public function getMedicalStudyVolunteers(Request $request){
        $user=$request->user();
        $data=$this->medicalStudyService->getMedicalStudyVolunteers($user);
        if($data==null){
            return response()->json(["message"=>"There are no medical studies volunteers"],404);
        }
        return response()->json($data,200);
    }
   public function createMedicalStudy(Request $request)
   {
       $userId=$request->user()->id;
       $validated = $request->validate([
           'title' => 'required|unique:medical_studies,title',
           'description' => 'required',
           'start_date' => 'required',
       ]);
       $data=$validated+=['is_active'=>1];
       $data=$data+=['doctor_id'=>$userId];

      if($this->medicalStudyService->create($data))
          return response()->json(["message"=>"Medical study was created"],201);
      return response()->json(["message"=>"Medical study not created"],500);
   }
   public function createMedicalStudyVolunteer(Request $request)
   {
       $medicalStudyId=$request->medical_study_id;
       $validated = $request->validate([
           'medical_study_id' => 'required',
           'phone' => 'required',
           'gender' => 'required',
           'allergies'=>'nullable',
           'full_name'=>'required',
           'birth_date'=>'required',
       ]);
       $data=$validated+=['is_study_volunteer'=>1];
      if($this->patientService->create($data)){
          return response()->json(["message"=>"Medical study volunteer created"],201);
      }
      return response()->json(["message"=>"Medical study not created"],500);
   }

}
