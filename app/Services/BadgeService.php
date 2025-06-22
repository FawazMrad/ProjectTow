<?php

namespace App\Services;

use App\Repositories\Interfaces\BadgeRepositoryInterface;

class BadgeService
{
    protected BadgeRepositoryInterface $badgeRepository;

    public function __construct(BadgeRepositoryInterface $badgeRepository)
    {
        $this->badgeRepository = $badgeRepository;
    }

    // Business logic will go here later
}
