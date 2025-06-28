<?php

namespace App\Services;

use App\Repositories\Interfaces\AppointmentImageRepositoryInterface;
use App\Repositories\Interfaces\AppointmentRepositoryInterface;

class AppointmentImageService
{
    protected AppointmentImageRepositoryInterface $appointmentImageRepository;
    protected AppointmentRepositoryInterface $appointmentRepository;
    public function __construct(AppointmentImageRepositoryInterface $appointmentImageRepository, AppointmentRepositoryInterface $appointmentRepository)
    {
        $this->appointmentImageRepository = $appointmentImageRepository;
        $this->appointmentRepository = $appointmentRepository;
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


    public function getAppointmentImages($doctorId, $appointmentId)
    {
        $images = [];

        // Get parent appointments (array or collection)
        $parents = $this->appointmentRepository->getParentAppointment($doctorId, $appointmentId);

        // Collect IDs from parents
        $parentIds = collect($parents)->pluck('id')->toArray();

        foreach ($parentIds as $parentId) {
            $images = array_merge($images, $this->appointmentImageRepository->findByAppointment($parentId)->toArray());
        }

        $images = array_merge($images, $this->appointmentImageRepository->findByAppointment($appointmentId)->toArray());
        return $images;
    }


}
