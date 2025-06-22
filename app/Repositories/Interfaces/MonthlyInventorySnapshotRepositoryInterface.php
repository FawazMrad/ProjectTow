<?php

namespace App\Repositories\Interfaces;

use App\Models\MonthlyInventorySnapshot;

interface MonthlyInventorySnapshotRepositoryInterface
{
    public function all(): iterable;
    public function findById(int $id): ?MonthlyInventorySnapshot;
    public function findByItemAndDate(int $itemId, string $date): ?MonthlyInventorySnapshot;
    public function create(array $data): MonthlyInventorySnapshot;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
}
