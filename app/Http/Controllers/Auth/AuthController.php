<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\AttendanceLogService;
use App\Services\UserService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct(protected UserService $userService,protected AttendanceLogService $attendanceLogService)
    {
    }

    public function login(Request $request)
    {
        $userType=$request->input('user_type');
        $credentials = $request->validate(['email' => 'required|email', 'password' => 'required|string',
        ]);

        $result = $this->userService->login($credentials,$userType);
        if ($userType === 'RECEPTIONIST') {
            if(!$this->attendanceLogService->logCheckIn($result['user'],'RECEPTIONIST'))
                return  response()->json(['message' => 'too early'], 401);;
        }
        return $result ? response()->json($result,200) : response()->json(['message' => 'Invalid credentials'], 401);

    }

    public function doctorLogin(Request $request)
    {
        $credentials = $request->validate(['email' => 'required|email', 'password' => 'required|string', 'device_name' => 'required|string', // 'web' or 'mobile
        ]);

        $result = $this->userService->login($credentials,'DOCTOR');
        if ($request->device_name === 'web') {
           if( !$this->attendanceLogService->logCheckIn($result['user'],'DOCTOR'))
               return    response()->json(['message' => 'too Early'], 401);;
        }
        return $result ? response()->json($result) : response()->json(['message' => 'Invalid credentials'], 401);

    }

    public function changePassword(Request $request)
    {
        $data = $request->validate([
            'password' => 'required|string',
            'new_password' => 'required|string|min:8',
            'email' => 'required|string|email|max:255|exists:users,email',
        ]);

        $user = $request->user();

        if (!Hash::check($data['password'], $user->password)) {
            return response()->json(['message' => 'The current password is incorrect.'], 401);
        }

         $data['password'] = $data['new_password'];
        $result = $this->userService->updatePassword($user, $data);
        return $result
            ? response()->json(['message' => 'Password changed successfully'],200)
            : response()->json(['message' => 'Failed to change password'], 500);
    }

    public function changeEmail(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|string|email|max:255|exists:users,email',
            'new_email' => 'required|string|email|max:255',
        ]);

        $user = $request->user();

        $result = $this->userService->updateEmail($user, $data);
        return $result
            ? response()->json(['message' => 'email changed successfully'],200)
            : response()->json(['message' => 'Failed to change email'], 500);
    }
    public function logout(Request $request)
    {
        $user = $request->user();
        $userType=$user->role;
        $token = $user->currentAccessToken();
        if ($token) {
            $token->delete();
        }
        if (in_array($userType, ['DOCTOR', 'RECEPTIONIST'])) {
            $this->attendanceLogService->logLogout($user);
        }

        return response()->json([
            'message' => 'User logged out successfully ',], 200);
    }
    public function getProfile(Request $request)
    {
        $user = $request->user();

        return response()->json([$user], 200);
    }


}
