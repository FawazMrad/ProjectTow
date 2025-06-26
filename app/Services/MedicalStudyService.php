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


    public function getMedicalStudies(mixed $user)
    {
        return $this->medicalStudyRepository->all();
    }

    public function getMedicalStudy(mixed $user,$medicalStudyId)
    {
        return $this->medicalStudyRepository->findByIdWithPatients($user,$medicalStudyId);
    }
    public function getMedicalStudyVolunteers($user){
    return $this->medicalStudyRepository->getVolunteers();
    }
    public function create($data){
    return $this->medicalStudyRepository->create($data);
    }


}
