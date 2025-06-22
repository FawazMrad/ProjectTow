<?php

namespace App\Repositories\Interfaces;

use App\Models\MedicalStudy;

interface MedicalStudyRepositoryInterface
{
    public function all(): iterable;
    public function findById(int $id): ?MedicalStudy;
    public function findByDoctor(int $doctorId): iterable;
    public function create(array $data): MedicalStudy;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
}
