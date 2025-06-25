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
    public function addImagesToAppointment(int $appointmentId, array $images): void
    {
        foreach ($images as $imageData) {
            $this->appointmentImageRepository->create([
                'appointment_id' => $appointmentId,
                'image' => $imageData['image'],
                'image_notes' => $imageData['image_notes'] ?? null,
            ]);
        }
    }

    // Business logic will be added here later
}
