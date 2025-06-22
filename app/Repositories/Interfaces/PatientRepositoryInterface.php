<?php

namespace App\Repositories\Interfaces;

use App\Models\Patient;

interface PatientRepositoryInterface
{
    public function all(): iterable;
    public function findById(int $id): ?Patient;
    public function findByFamily(int $familyId): iterable;
    public function create(array $data): Patient;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
}
