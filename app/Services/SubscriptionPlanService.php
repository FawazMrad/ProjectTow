<?php

namespace App\Services;

use App\Repositories\Interfaces\SubscriptionPlanRepositoryInterface;

class SubscriptionPlanService
{
    protected SubscriptionPlanRepositoryInterface $subscriptionPlanRepository;

    public function __construct(SubscriptionPlanRepositoryInterface $subscriptionPlanRepository)
    {
        $this->subscriptionPlanRepository = $subscriptionPlanRepository;
    }

    // Business logic will be added here later
}
