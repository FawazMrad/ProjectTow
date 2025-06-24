<?php
namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\AttendanceLogService;
use App\Services\UserService;


class HomePageController extends Controller
{
    protected AttendanceLogService $attendanceLogService;
    protected UserService $receptionistService;

    public function __construct(AttendanceLogService $attendanceLogService,UserService $receptionistService)
    {
        $this->attendanceLogService = $attendanceLogService;
        $this->receptionistService = $receptionistService;
    }

    public function receptionistCommitment()
    {
        $data = $this->attendanceLogService->getReceptionistCommitmentThisMonth();
        return response()->json($data);
    }

   public function indexReceptionists()
   {
        $data = $this->receptionistService->getReceptionists();
       if($data == null){
           return response()->json(["message" => "No receptionists found"],404);
       }
        return response()->json($data);
   }

}

