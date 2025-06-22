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

    // Business logic will be added here later
}
