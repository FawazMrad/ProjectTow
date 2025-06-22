<?php

namespace App\Repositories;

use App\Models\Bill;
use App\Repositories\Interfaces\BillRepositoryInterface;

class BillRepository implements BillRepositoryInterface
{
    public function all(): iterable
    {
        return Bill::all();
    }

    public function findById(int $id): ?Bill
    {
        return Bill::find($id);
    }

    public function findByFamily(int $familyId): iterable
    {
        return Bill::where('family_id', $familyId)->get();
    }

    public function findByPatient(int $patientId): iterable
    {
        return Bill::where('patient_id', $patientId)->get();
    }

    public function findByStatus(string $status): iterable
    {
        return Bill::where('payment_status', $status)->get();
    }

    public function create(array $data): Bill
    {
        return Bill::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $bill = Bill::find($id);
        return $bill ? $bill->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $bill = Bill::find($id);
        return $bill ? $bill->delete() : false;
    }
}
