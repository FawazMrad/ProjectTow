<?php

namespace App\Repositories;

use App\Models\AttendanceLog;
use App\Repositories\Interfaces\AttendanceLogRepositoryInterface;
use Carbon\Carbon;

class AttendanceLogRepository implements AttendanceLogRepositoryInterface
{
    public function all(): iterable
    {
        return AttendanceLog::all();
    }

    public function findById(int $id): ?AttendanceLog
    {
        return AttendanceLog::find($id);
    }

    public function create(array $data): AttendanceLog
    {
        return AttendanceLog::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $log = AttendanceLog::find($id);
        return $log ? $log->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $log = AttendanceLog::find($id);
        return $log ? $log->delete() : false;
    }
    public function getLogsByTypeAndDateRange(string $userType, $startDate, $endDate)
    {
        return AttendanceLog::with('user')
            ->where('user_type', $userType)
            ->whereBetween('check_in', [$startDate, $endDate])
            ->get();
    }
    public function hasCheckIn(int $doctorId, $date): bool
    {
        return AttendanceLog::where('user_id', $doctorId)
            ->whereDate('check_in', $date->toDateString())
            ->exists();
    }
    public function findByUserIdAndDate($user){
        return AttendanceLog::where('user_id', $user->id)
            ->whereDate('created_at', Carbon::today())
            ->latest('check_in')
            ->first();
    }
}
