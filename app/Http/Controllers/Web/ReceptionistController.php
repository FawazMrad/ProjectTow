<?php

namespace App\Http\Controllers\Web;

use App\Services\AttendanceLogService;
use App\Services\UserService;
use Illuminate\Http\Request;

;

class ReceptionistController
{
    protected UserService $receptionistService;

    public function __construct(AttendanceLogService $attendanceLogService, UserService $receptionistService)
    {
        $this->receptionistService = $receptionistService;
    }

    public function getReceptionist($id)
    {
        $receptionistId = (int)$id;

        $data = $this->receptionistService->getUser($receptionistId);
        if ($data == null) {
            return response(['message' => 'receptionist not found'], 404);
        }
        return response()->json($data);

    }

    public function deleteReceptionist(Request $request)
    {
        $receptionistId = $request->input('receptionistId');
        if ($this->receptionistService->deleteUser($receptionistId))
            return response(['message' => 'receptionist deleted successfully'], 200);
        else
            return response(['message' => 'receptionist deleted unsuccessfully'], 404);
    }

    public function getLogs($id)
    {
        $receptionistId = $id;
        $data = $this->receptionistService->getLogs($receptionistId);
        if ($data == null) {
            return response(['message' => 'there is no logs for this receptionist'], 404);
        }
        return response()->json($data, 200);
    }
    public function addReceptionist(Request $request)
    {
         $credentials = $request->validate([
           'user_name' => ['required', 'string', 'max:255'],
             'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
             'password' => ['required', 'string', 'min:8'],
             'phone' => ['required', 'string', 'min:10', 'max:10'],
        ]);
         $credentials+=['role'=>'RECEPTIONIST'];
         $credentials+=['is_accepted'=>1];
         $newReceptionist=$this->receptionistService->createUser($credentials);
         if ($newReceptionist) {
             return response(['message' => 'receptionist created successfully'], 200);
         }
         return response(['message' => 'receptionist created unsuccessfully'], 404);
    }
}
