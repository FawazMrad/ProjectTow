<?php

namespace App\Repositories;

use App\Models\Payment;
use App\Repositories\Interfaces\PaymentRepositoryInterface;

class PaymentRepository implements PaymentRepositoryInterface
{
    public function all(): iterable
    {
        return Payment::all();
    }

    public function findById(int $id): ?Payment
    {
        return Payment::find($id);
    }

    public function findByBill(int $billId): iterable
    {
        return Payment::where('bill_id', $billId)->get();
    }

    public function create(array $data): Payment
    {
        return Payment::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $payment = Payment::find($id);
        return $payment ? $payment->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $payment = Payment::find($id);
        return $payment ? $payment->delete() : false;
    }
}
