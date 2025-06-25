<?php

namespace App\Repositories;

use App\Models\WeeklySchedule;
use App\Repositories\Interfaces\WeeklyScheduleRepositoryInterface;

class WeeklyScheduleRepository implements WeeklyScheduleRepositoryInterface
{
    public function all(): iterable
    {
        return WeeklySchedule::all();
    }

    public function findById(int $id): ?WeeklySchedule
    {
        return WeeklySchedule::find($id);
    }

    public function findByDoctorAndDay(int $doctorId, string $day): ?WeeklySchedule
    {
        return WeeklySchedule::where('doctor_id', $doctorId)
            ->where('day_of_week', $day)
            ->first();
    }

    public function create(array $data): WeeklySchedule
    {
        return WeeklySchedule::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $schedule = WeeklySchedule::find($id);
        return $schedule ? $schedule->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $schedule = WeeklySchedule::find($id);
        return $schedule ? $schedule->delete() : false;
    }
    public function getWorkDays(){
        return WeeklySchedule::all()->where('is_active',1)->pluck('day_of_week')->toArray();
    }

}
