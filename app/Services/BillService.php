<?php

namespace App\Services;

use App\Repositories\Interfaces\BillRepositoryInterface;

class BillService
{
    protected BillRepositoryInterface $billRepository;

    public function __construct(BillRepositoryInterface $billRepository)
    {
        $this->billRepository = $billRepository;
    }

    // Business logic will be added here later
}
