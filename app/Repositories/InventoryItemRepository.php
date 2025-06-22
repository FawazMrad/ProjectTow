<?php

namespace App\Repositories;

use App\Models\InventoryItem;
use App\Repositories\Interfaces\InventoryItemRepositoryInterface;

class InventoryItemRepository implements InventoryItemRepositoryInterface
{
    public function all(): iterable
    {
        return InventoryItem::all();
    }

    public function findById(int $id): ?InventoryItem
    {
        return InventoryItem::find($id);
    }

    public function create(array $data): InventoryItem
    {
        return InventoryItem::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $item = InventoryItem::find($id);
        return $item ? $item->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $item = InventoryItem::find($id);
        return $item ? $item->delete() : false;
    }
}
