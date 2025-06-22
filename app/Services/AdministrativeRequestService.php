<?php

namespace App\Services;

use App\Repositories\Interfaces\AdministrativeRequestRepositoryInterface;

class AdministrativeRequestService
{
    protected AdministrativeRequestRepositoryInterface $administrativeRequestRepository;

    public function __construct(AdministrativeRequestRepositoryInterface $administrativeRequestRepository)
    {
        $this->administrativeRequestRepository = $administrativeRequestRepository;
    }

    // Business logic will be added here later
}
