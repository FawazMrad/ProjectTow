<?php

namespace App\Repositories\Interfaces;

use App\Models\AppointmentImage;

interface AppointmentImageRepositoryInterface
{
    public function all(): iterable;
    public function findById(int $id): ?AppointmentImage;
    public function findByAppointment(int $appointmentId): iterable;
    public function create(array $data): AppointmentImage;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
}
