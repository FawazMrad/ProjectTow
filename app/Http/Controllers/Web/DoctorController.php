<?php

namespace App\Http\Controllers\Web;

use App\Services\AttendanceLogService;
use App\Services\UserService;
use Illuminate\Http\Request;

class DoctorController
{
    protected UserService $doctorService;

    public function __construct(AttendanceLogService $attendanceLogService, UserService $doctorService)
    {
        $this->doctorService = $doctorService;
    }
    public function getLogs(Request $request)
    {
        $doctorId = $request->user()->id;
        $data = $this->doctorService->getLogs($doctorId);
        if ($data == null) {
            return response(['message' => 'there is no logs for the doctor'], 404);
        }
        return response()->json($data, 200);
    }
}
