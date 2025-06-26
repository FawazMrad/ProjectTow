<?php

namespace App\Services;

use App\Repositories\Interfaces\PatientRepositoryInterface;

class PatientService
{
    protected PatientRepositoryInterface $patientRepository;

    public function __construct(PatientRepositoryInterface $patientRepository)
    {
        $this->patientRepository = $patientRepository;
    }

   public function getPatient($patientId)
   {
       return $this->patientRepository->findById($patientId);

   }
   public function create($data){
    return $this->patientRepository->create($data);
   }
}
