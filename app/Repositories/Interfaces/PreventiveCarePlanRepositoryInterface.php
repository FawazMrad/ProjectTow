<?php

namespace App\Repositories\Interfaces;

use App\Models\PreventiveCarePlan;

interface PreventiveCarePlanRepositoryInterface
{
    public function all(): iterable;
    public function findById(int $id): ?PreventiveCarePlan;
    public function findByPatient(int $patientId): iterable;
    public function findActivePlans(): iterable;
    public function create(array $data): PreventiveCarePlan;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
}
