<?php

namespace App\Repositories\Interfaces;

use App\Models\Bill;

interface BillRepositoryInterface
{
    public function all(): iterable;
    public function findById(int $id): ?Bill;
    public function findByFamily(int $familyId): iterable;
    public function findByPatient(int $patientId): iterable;
    public function findByStatus(string $status): iterable;
    public function create(array $data): Bill;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;

    public function findByIdWithPayments($billId);

    public function searchByPatientName(string $patientName);
}
