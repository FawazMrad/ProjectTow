<?php

namespace App\Services;

use App\Repositories\Interfaces\InventoryItemRepositoryInterface;

class InventoryItemService
{
    protected InventoryItemRepositoryInterface $inventoryItemRepository;

    public function __construct(InventoryItemRepositoryInterface $inventoryItemRepository)
    {
        $this->inventoryItemRepository = $inventoryItemRepository;
    }

    // Business logic will be added here later
}
