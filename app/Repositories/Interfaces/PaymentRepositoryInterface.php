<?php

namespace App\Repositories\Interfaces;

use App\Models\Payment;

interface PaymentRepositoryInterface
{
    public function all(): iterable;
    public function findById(int $id): ?Payment;
    public function findByBill(int $billId): iterable;
    public function create(array $data): Payment;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
}
