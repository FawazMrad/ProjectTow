<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DoctorAuthController extends Controller
{
    public function __construct(protected UserService $userService)
    {
    }

    public function login(Request $request)
    {
        $credentials = $request->validate(['email' => 'required|email', 'password' => 'required|string', 'device_name' => 'required|string', // 'web' or 'mobile
        ]);

        $result = $this->userService->doctorLogin($credentials);

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
            ? response()->json(['message' => 'Password changed successfully'])
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
        $token = $request->user()->currentAccessToken();

        if ($token) {
            $token->delete();
        }

        return response()->json([
            'message' => 'Doctor logged out successfully from web',
        ], 200);
    }


}
