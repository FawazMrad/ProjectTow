<?php

namespace App\Services;

use App\Repositories\Interfaces\AttendanceLogRepositoryInterface;

class AttendanceLogService
{
    protected AttendanceLogRepositoryInterface $attendanceLogRepository;

    public function __construct(AttendanceLogRepositoryInterface $attendanceLogRepository)
    {
        $this->attendanceLogRepository = $attendanceLogRepository;
    }

    // Business logic will be added here later
}
