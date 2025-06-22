<?php

namespace App\Services;

use App\Repositories\Interfaces\TrainerBadgeRepositoryInterface;

class TrainerBadgeService
{
    protected TrainerBadgeRepositoryInterface $trainerBadgeRepository;

    public function __construct(TrainerBadgeRepositoryInterface $trainerBadgeRepository)
    {
        $this->trainerBadgeRepository = $trainerBadgeRepository;
    }

    // Business logic to be added here later
}
