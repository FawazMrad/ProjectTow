<?php

namespace App\Services;

use App\Repositories\Interfaces\PatientSubscriptionRepositoryInterface;

class PatientSubscriptionService
{
    protected PatientSubscriptionRepositoryInterface $patientSubscriptionRepository;

    public function __construct(PatientSubscriptionRepositoryInterface $patientSubscriptionRepository)
    {
        $this->patientSubscriptionRepository = $patientSubscriptionRepository;
    }

    // Business logic will be added here later
}
