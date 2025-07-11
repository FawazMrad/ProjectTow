<?php

namespace App\Repositories;

use App\Models\AttendanceLog;
use App\Models\User;
use App\Models\WeeklySchedule;
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
    public function hasAbsenceLog(int $doctorId, Carbon $date): bool
    {
        return AttendanceLog::where('user_id', $doctorId)
            ->whereDate('created_at', $date)
            ->where('status', 'غياب')
            ->exists();
    }
    public function getActiveScheduledUsersForToday()
    {
        $today = now();
        $arabicDay = (new \App\Helpers\ArabicHelper)->arabicDayName($today);

        $doctorIds = WeeklySchedule::where('day_of_week', $arabicDay)
            ->where('is_active', true)
            ->pluck('doctor_id')
            ->unique()
            ->toArray();

        // Get users with roles DOCTOR or RECEPTIONIST
        return User::whereIn('id', $doctorIds)
            ->orWhere('role', 'RECEPTIONIST')
            ->get();
    }

public function getMissingLogoutLogs()
{
    $today = \Illuminate\Support\Carbon::now();
    $yesterday = $today->copy()->subDay()->startOfDay();
  return  AttendanceLog::whereNotNull('check_in')
        ->whereNull('check_out')
        ->whereDate('check_in', $yesterday)
        ->get();
}
public function autoLogout($user,$log)
{
    $today = now();
    $log->check_out = $today;
    $log->save();
    $user->tokens()->delete();
}

}
