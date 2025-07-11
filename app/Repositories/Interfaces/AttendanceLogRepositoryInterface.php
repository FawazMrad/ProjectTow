<?php

namespace App\Repositories\Interfaces;

use App\Models\AttendanceLog;
use Carbon\Carbon;

interface AttendanceLogRepositoryInterface
{
    public function all(): iterable;
    public function findById(int $id): ?AttendanceLog;
    public function create(array $data): AttendanceLog;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
    public function getLogsByTypeAndDateRange(string $userType, $startDate, $endDate);
    public function hasCheckIn(int $doctorId, Carbon $date): bool;
    public function findByUserIdAndDate($user);
    public function hasAbsenceLog(int $doctorId, Carbon $date): bool;
    public function getActiveScheduledUsersForToday();
    public function getMissingLogoutLogs();

    public function autoLogout(\App\Models\User $user, mixed $log);
}
