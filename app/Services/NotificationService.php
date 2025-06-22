<?php

namespace App\Services;

use App\Repositories\Interfaces\NotificationRepositoryInterface;

class NotificationService
{
    protected NotificationRepositoryInterface $notificationRepository;

    public function __construct(NotificationRepositoryInterface $notificationRepository)
    {
        $this->notificationRepository = $notificationRepository;
    }

    // Business logic will be added here later
}
