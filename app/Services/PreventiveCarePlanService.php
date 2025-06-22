<?php

namespace App\Services;

use App\Repositories\Interfaces\PreventiveCarePlanRepositoryInterface;

class PreventiveCarePlanService
{
    protected PreventiveCarePlanRepositoryInterface $preventiveCarePlanRepository;

    public function __construct(PreventiveCarePlanRepositoryInterface $preventiveCarePlanRepository)
    {
        $this->preventiveCarePlanRepository = $preventiveCarePlanRepository;
    }

    // Business logic will be added here later
}
