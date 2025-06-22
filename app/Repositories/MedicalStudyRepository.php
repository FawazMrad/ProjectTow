<?php

namespace App\Repositories;

use App\Models\MedicalStudy;
use App\Repositories\Interfaces\MedicalStudyRepositoryInterface;

class MedicalStudyRepository implements MedicalStudyRepositoryInterface
{
    public function all(): iterable
    {
        return MedicalStudy::all();
    }

    public function findById(int $id): ?MedicalStudy
    {
        return MedicalStudy::find($id);
    }

    public function findByDoctor(int $doctorId): iterable
    {
        return MedicalStudy::where('doctor_id', $doctorId)->get();
    }

    public function create(array $data): MedicalStudy
    {
        return MedicalStudy::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $study = MedicalStudy::find($id);
        return $study ? $study->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $study = MedicalStudy::find($id);
        return $study ? $study->delete() : false;
    }
}
