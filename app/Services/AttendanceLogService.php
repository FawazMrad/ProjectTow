<?php

namespace App\Services;

use App\Helpers\DateTimeHelper;
use App\Repositories\Interfaces\AttendanceLogRepositoryInterface;
use Illuminate\Support\Carbon;

class AttendanceLogService
{
    protected AttendanceLogRepositoryInterface $attendanceRepo;

    public function __construct(AttendanceLogRepositoryInterface $attendanceRepo)
    {
        $this->attendanceRepo = $attendanceRepo;
    }
    public function getReceptionistCommitmentThisMonth(): array
    {
        $dateRange = DateTimeHelper::getLastMonthRange();
        $startOfMonth = $dateRange['start']->format('Y-m-d');
        $endOfMonth = $dateRange['end']->format('Y-m-d');

        $doctorLogs = $this->attendanceRepo->getLogsByTypeAndDateRange('DOCTOR', $startOfMonth, $endOfMonth);
        $totalDoctorDays = $doctorLogs->count();


        $receptionistLogs = $this->attendanceRepo->getLogsByTypeAndDateRange('RECEPTIONIST', $startOfMonth, $endOfMonth);

        $grouped = $receptionistLogs->groupBy('user_id');

        $results = [];

        foreach ($grouped as $userId => $logs) {
            $user = $logs->first()->user;

            $workDays = $logs->whereNotIn('status', ['ABSENT'])->count();
            $absentDays = $logs->where('status', 'ABSENT')->count();
            $swappedDays = $logs->where('status', 'SWAPPED')->count();
            $lateDays = $logs->where('status', 'LATE')->count();

            $percentage = $totalDoctorDays > 0
                ? round(($workDays / $totalDoctorDays) * 100, 2)
                : 0;

            $results[] = [
                'name' => $user->user_name,
                'work_days' => $workDays,
                'absent_days' => $absentDays,
                'swapped_days' => $swappedDays,
                'late_days' => $lateDays,
                'commitment_percentage' => $percentage,
            ];
        }

        return $results;
    }


    // Business logic will be added here later
}
