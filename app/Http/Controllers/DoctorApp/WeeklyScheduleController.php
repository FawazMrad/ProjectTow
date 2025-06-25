<?php

namespace App\Http\Controllers\DoctorApp;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use App\Services\WeeklyScheduleService;
use Illuminate\Http\Request;


class WeeklyScheduleController extends Controller
{
    protected UserService $doctorService;
    protected WeeklyScheduleService $weeklyScheduleService;

    public function __construct(UserService $doctorService, WeeklyScheduleService $weeklyScheduleService)
    {
        $this->doctorService = $doctorService;
        $this->weeklyScheduleService = $weeklyScheduleService;
    }

    public function index(Request $request)
    {
        $user = $request->user();
        $weeklySchedules = $this->doctorService->getWeeklySchedules($user);
        return response()->json($weeklySchedules, 200);

    }

    public function update(Request $request)
    {
        $dayId = $request->day_id;

        $data = $request->schedule[0] ?? $request->schedule;

        if ($this->weeklyScheduleService->updateWeeklySchedule($dayId, $data)) {
            return response()->json(["message" => "Weekly Schedule Updated Successfully"], 200);
        }
        return response()->json(["message" => "Conflict detected. Receptionist notified to handle rescheduling."], 409);
    }

}
