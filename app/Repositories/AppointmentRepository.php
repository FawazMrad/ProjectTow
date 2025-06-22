<?php

namespace App\Repositories;

use App\Models\Appointment;
use App\Repositories\Interfaces\AppointmentRepositoryInterface;

class AppointmentRepository implements AppointmentRepositoryInterface
{
    public function all(): iterable
    {
        return Appointment::all();
    }

    public function findById(int $id): ?Appointment
    {
        return Appointment::find($id);
    }

    public function findByPatient(int $patientId): iterable
    {
        return Appointment::where('patient_id', $patientId)->get();
    }

    public function findByDoctor(int $doctorId): iterable
    {
        return Appointment::where('doctor_id', $doctorId)->get();
    }

    public function findByStatus(string $status): iterable
    {
        return Appointment::where('status', $status)->get();
    }

    public function create(array $data): Appointment
    {
        return Appointment::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $appointment = Appointment::find($id);
        return $appointment ? $appointment->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $appointment = Appointment::find($id);
        return $appointment ? $appointment->delete() : false;
    }
}
