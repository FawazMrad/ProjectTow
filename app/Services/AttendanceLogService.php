<?php

namespace App\Services;

use App\Helpers\DateTimeHelper;
use App\Models\AttendanceLog;
use App\Models\User;
use App\Models\WeeklySchedule;
use App\Repositories\Interfaces\AttendanceLogRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Carbon;

class AttendanceLogService
{
    protected AttendanceLogRepositoryInterface $attendanceRepo;
    protected UserRepositoryInterface $userRepo;

    public function __construct(AttendanceLogRepositoryInterface $attendanceRepo, UserRepositoryInterface $userRepo)
    {
        $this->attendanceRepo = $attendanceRepo;
        $this->userRepo = $userRepo;
    }

    public function logCheckIn(User $user,$userType)
    {
        $now       = Carbon::now();
        $arabicDay = (new \App\Helpers\ArabicHelper)->arabicDayName($now);
        $schedule = WeeklySchedule::where('doctor_id', 1)
            ->where('day_of_week', $arabicDay)
            ->where('is_active', true)
            ->first();


        if (!$schedule) {
            return false;
        }

        $scheduledStart = Carbon::createFromTimeString($schedule->start_time);
        $twoHoursBefore = $scheduledStart->copy()->subHours(2);
        $twentyMinutesAfter = $scheduledStart->copy()->addMinutes(20);

        // Determine status
        $status = 'تأخير'; // Default to "late" (if none of the conditions below match)

        if ($now->between($twoHoursBefore, $twentyMinutesAfter)) {
            // If check-in is within 2 hours before or 20 minutes after the start time
            $status = 'حضور';
        }


        if ($now->lessThan($twoHoursBefore)) {
            return false;
        }

        $this->attendanceRepo->create([
            'user_id'   => $user->id,
            'status'    => $status,
            'check_in'  => $now,
            'user_type' => $userType,
            'is_swapped'=> false,
        ]);
        return true;
    }

    public function markUserAbsences(): void
    {
        $today = now()->startOfDay();
        $arabicDay = (new \App\Helpers\ArabicHelper)->arabicDayName($today);

        $users =$this->attendanceRepo->getActiveScheduledUsersForToday();

        foreach ($users as $user) {
            $userId = $user->id;
            $userType = strtoupper($user->role);

            if (!in_array($userType, ['DOCTOR', 'RECEPTIONIST'])) {
                continue;
            }
            if ($this->attendanceRepo->hasCheckIn($userId, $today)) {
                continue;
            }
            if ($this->attendanceRepo->hasAbsenceLog($userId, $today)) {
                continue;
            }
            $this->attendanceRepo->create([
                'user_id'    => $userId,
                'status'     => 'غياب',
                'check_in'   => null,
                'check_out'  => null,
                'user_type'  => $userType,
                'is_swapped' => false,
                'created_at' => now()->endOfDay(),
                'updated_at' => now()->endOfDay(),
            ]);
        }
    }

public function autoLogoutUsers(){
    $today = Carbon::now();
    $logs = $this->attendanceRepo->getMissingLogoutLogs();


    foreach ($logs as $log) {
        $user = $this->userRepo->findById($log->user_id);
        if (!$user) {
            continue;
        }
        $this->attendanceRepo->autoLogout($user,$log);

    }

}

    public function logLogout(User $user): void
    {

        $log =$this->attendanceRepo->findByUserIdAndDate($user);

        if (!$log) {
            return;
        }

        $now = Carbon::now();
        $log->check_out = $now;

        if (in_array($user->role, ['DOCTOR', 'RECEPTIONIST'])) {
            $schedule = WeeklySchedule:: where('day_of_week', (new \App\Helpers\ArabicHelper)->arabicDayName($now))
                ->where('is_active', true)
                ->first();
            if ($schedule) {
                $scheduledEnd = Carbon::createFromTimeString($schedule->end_time);
                $ninetyMinutesBeforeEnd = $scheduledEnd->copy()->subMinutes(90);
                if ($now->lessThan($ninetyMinutesBeforeEnd)) {
                    $log->status = 'تأخير';
                }
            }
        }

        $log->save();
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

}
