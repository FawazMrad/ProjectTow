<?php

namespace App\Repositories\Interfaces;

use App\Models\WeeklySchedule;

interface WeeklyScheduleRepositoryInterface
{
    public function all(): iterable;
    public function findById(int $id): ?WeeklySchedule;
    public function findByDoctorAndDay(int $doctorId, string $day): ?WeeklySchedule;
    public function create(array $data): WeeklySchedule;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;

    //public function updateWeeklySchedule(int $weeklyScheduleId, array $weeklyScheduleData);
}
