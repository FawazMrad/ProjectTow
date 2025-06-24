<?php

namespace App\Repositories\Interfaces;

use App\Models\AttendanceLog;

interface AttendanceLogRepositoryInterface
{
    public function all(): iterable;
    public function findById(int $id): ?AttendanceLog;
    public function create(array $data): AttendanceLog;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
    public function getLogsByTypeAndDateRange(string $userType, $startDate, $endDate);

}
