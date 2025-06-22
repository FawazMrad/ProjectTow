<?php

namespace App\Repositories;

use App\Models\MonthlyInventorySnapshot;
use App\Repositories\Interfaces\MonthlyInventorySnapshotRepositoryInterface;

class MonthlyInventorySnapshotRepository implements MonthlyInventorySnapshotRepositoryInterface
{
    public function all(): iterable
    {
        return MonthlyInventorySnapshot::all();
    }

    public function findById(int $id): ?MonthlyInventorySnapshot
    {
        return MonthlyInventorySnapshot::find($id);
    }

    public function findByItemAndDate(int $itemId, string $date): ?MonthlyInventorySnapshot
    {
        return MonthlyInventorySnapshot::where('inventory_item_id', $itemId)
            ->where('snapshot_date', $date)
            ->first();
    }

    public function create(array $data): MonthlyInventorySnapshot
    {
        return MonthlyInventorySnapshot::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $snapshot = MonthlyInventorySnapshot::find($id);
        return $snapshot ? $snapshot->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $snapshot = MonthlyInventorySnapshot::find($id);
        return $snapshot ? $snapshot->delete() : false;
    }
}
