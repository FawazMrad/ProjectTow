<?php

namespace App\Http\Controllers\DoctorApp;

use App\Http\Controllers\Controller;
use App\Services\NotificationService;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
   protected NotificationService $notificationService;
   public function __construct(NotificationService $notificationService){
       $this->notificationService = $notificationService;
   }
   public function index(Request $request)
   {
       $userId=$request->user()->id;
       $data=$this->notificationService->getDoctorNotifications($userId);
       return response()->json($data,200);
   }
   public function getNotification(Request $request)
   {
       $notificationId=$request->id;
       $data=$this->notificationService->getNotification($notificationId);
       return response()->json($data,200);
   }
}
