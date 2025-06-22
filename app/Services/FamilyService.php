<?php

namespace App\Services;

use App\Repositories\Interfaces\FamilyRepositoryInterface;

class FamilyService
{
    protected FamilyRepositoryInterface $familyRepository;

    public function __construct(FamilyRepositoryInterface $familyRepository)
    {
        $this->familyRepository = $familyRepository;
    }

    // Business logic will be added here later
}
