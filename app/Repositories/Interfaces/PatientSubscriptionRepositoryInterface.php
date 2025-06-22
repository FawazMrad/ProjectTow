<?php

namespace App\Repositories\Interfaces;

use App\Models\PatientSubscription;

interface PatientSubscriptionRepositoryInterface
{
    public function all(): iterable;
    public function findById(int $id): ?PatientSubscription;
    public function findByPatient(int $patientId): iterable;
    public function findActiveByPatient(int $patientId): iterable;
    public function create(array $data): PatientSubscription;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
}
