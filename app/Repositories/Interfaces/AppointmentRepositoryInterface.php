<?php

namespace App\Repositories\Interfaces;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Support\Collection;

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
    public function getConflictingAppointments(int $doctorId, string $dayOfWeek, array $newScheduleData): Collection;
    public function getAppointment(int $doctorId,int $appointmentId);
    public function getDoctorTodayAppointments(User $doctor);

    public function getDoctorUpcomingAppointments(User $doctor);
    public function getAppointmentPatient(int $appointmentId);

}
