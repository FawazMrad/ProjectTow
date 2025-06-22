<?php

namespace App\Services;

use App\Repositories\Interfaces\TrainingSessionRepositoryInterface;

class TrainingSessionService
{
    protected TrainingSessionRepositoryInterface $trainingSessionRepository;

    public function __construct(TrainingSessionRepositoryInterface $trainingSessionRepository)
    {
        $this->trainingSessionRepository = $trainingSessionRepository;
    }

    // Business logic will be added here later
}
