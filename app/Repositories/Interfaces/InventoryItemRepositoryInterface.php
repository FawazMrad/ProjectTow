<?php

namespace App\Repositories\Interfaces;

use App\Models\InventoryItem;

interface InventoryItemRepositoryInterface
{
    public function all(): iterable;
    public function findById(int $id): ?InventoryItem;
    public function create(array $data): InventoryItem;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
}
