<?php

namespace App\Repositories;

use App\Models\AppointmentImage;
use App\Repositories\Interfaces\AppointmentImageRepositoryInterface;

class AppointmentImageRepository implements AppointmentImageRepositoryInterface
{
    public function all(): iterable
    {
        return AppointmentImage::all();
    }

    public function findById(int $id): ?AppointmentImage
    {
        return AppointmentImage::find($id);
    }

    public function findByAppointment(int $appointmentId): iterable
    {
        return AppointmentImage::where('appointment_id', $appointmentId)->get();
    }

    public function create(array $data): AppointmentImage
    {
        return AppointmentImage::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $image = AppointmentImage::find($id);
        return $image ? $image->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $image = AppointmentImage::find($id);
        return $image ? $image->delete() : false;
    }
}
