<?php

namespace App\Services;

use App\Repositories\Interfaces\MedicalStudyRepositoryInterface;

class MedicalStudyService
{
    protected MedicalStudyRepositoryInterface $medicalStudyRepository;

    public function __construct(MedicalStudyRepositoryInterface $medicalStudyRepository)
    {
        $this->medicalStudyRepository = $medicalStudyRepository;
    }

    // Business logic will be added here later
}
