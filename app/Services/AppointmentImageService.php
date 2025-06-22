<?php

namespace App\Services;

use App\Repositories\Interfaces\AppointmentImageRepositoryInterface;

class AppointmentImageService
{
    protected AppointmentImageRepositoryInterface $appointmentImageRepository;

    public function __construct(AppointmentImageRepositoryInterface $appointmentImageRepository)
    {
        $this->appointmentImageRepository = $appointmentImageRepository;
    }

    // Business logic will be added here later
}
