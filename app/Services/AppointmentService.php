<?php

namespace App\Services;

use App\Repositories\Interfaces\AppointmentRepositoryInterface;

class AppointmentService
{
    protected AppointmentRepositoryInterface $appointmentRepository;

    public function __construct(AppointmentRepositoryInterface $appointmentRepository)
    {
        $this->appointmentRepository = $appointmentRepository;
    }

    // Business logic will be added here later
}
