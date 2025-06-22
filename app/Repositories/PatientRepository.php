<?php

namespace App\Repositories;

use App\Models\Patient;
use App\Repositories\Interfaces\PatientRepositoryInterface;

class PatientRepository implements PatientRepositoryInterface
{
    public function all(): iterable
    {
        return Patient::all();
    }

    public function findById(int $id): ?Patient
    {
        return Patient::find($id);
    }

    public function findByFamily(int $familyId): iterable
    {
        return Patient::where('family_id', $familyId)->get();
    }

    public function create(array $data): Patient
    {
        return Patient::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $patient = Patient::find($id);
        return $patient ? $patient->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $patient = Patient::find($id);
        return $patient ? $patient->delete() : false;
    }
}
