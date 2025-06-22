<?php

namespace App\Services;

use App\Repositories\Interfaces\MonthlyInventorySnapshotRepositoryInterface;

class MonthlyInventorySnapshotService
{
    protected MonthlyInventorySnapshotRepositoryInterface $monthlyInventorySnapshotRepository;

    public function __construct(MonthlyInventorySnapshotRepositoryInterface $monthlyInventorySnapshotRepository)
    {
        $this->monthlyInventorySnapshotRepository = $monthlyInventorySnapshotRepository;
    }

    // Business logic will be added here later
}
