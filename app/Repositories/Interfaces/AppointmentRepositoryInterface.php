<?php

namespace App\Repositories\Interfaces;

use App\Models\Appointment;

interface AppointmentRepositoryInterface
{
    public function all(): iterable;
    public function findById(int $id): ?Appointment;
    public function findByPatient(int $patientId): iterable;
    public function findByDoctor(int $doctorId): iterable;
    public function findByStatus(string $status): iterable;
    public function create(array $data): Appointment;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
}
