<?php

use App\Http\Controllers\Auth\DoctorAuthController;
use App\Http\Controllers\Web\HomePageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| WEB Routes
|--------------------------------------------------------------------------
*/

Route::prefix('web')->middleware('api')->group(function () {
    // 🟢 Public route (no token)
    Route::post('doctor/login', [DoctorAuthController::class, 'login']);

    // 🔒 Protected routes (token required)
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('homepage/receptionistsCommitment', [HomePageController::class, 'receptionistCommitment']);
        Route::get('homepage/receptionists', [HomePageController::class, 'indexReceptionists']);
        Route::post('receptionist', [\App\Http\Controllers\Web\ReceptionistController::class, 'getReceptionist']);
        Route::post('receptionist/delete', [\App\Http\Controllers\Web\ReceptionistController::class, 'deleteReceptionist']);
        Route::post('receptionist/getLogs', [\App\Http\Controllers\Web\ReceptionistController::class, 'getLogs']);
        Route::post('receptionist/add', [\App\Http\Controllers\Web\ReceptionistController::class, 'addReceptionist']);
        Route::post('doctor/changePassword', [\App\Http\Controllers\Auth\DoctorAuthController::class, 'changePassword']);
        Route::post('doctor/changeEmail', [\App\Http\Controllers\Auth\DoctorAuthController::class, 'changeEmail']);
        Route::get('doctor/getLogs', [\App\Http\Controllers\Web\DoctorController::class, 'getLogs']);


    });
});
/*
|--------------------------------------------------------------------------
| DOCTOR Routes
|--------------------------------------------------------------------------
*/
Route::prefix('doctor')->middleware('api')->group(function () {
   // public route
    Route::post('login', [DoctorAuthController::class, 'login']);

    //protected route
    Route::middleware('auth:sanctum')->group(function () {
        //Route::get('receptionist/commitment', [DoctorProfileController::class, 'show']);
        // Route::put('doctor/profile', [DoctorProfileController::class, 'update']);
        // Add more protected web doctor routes here
    });
    // Add more doctor routes here
});

/*
|--------------------------------------------------------------------------
| RECEPTIONIST Routes
|--------------------------------------------------------------------------
*/
Route::prefix('receptionist')->middleware('auth:sanctum')->group(function () {
  //  Route::get('patients', [PatientController::class, 'index']);
    // Add more receptionist routes here
});

/*
|--------------------------------------------------------------------------
| TRAINER Routes
|--------------------------------------------------------------------------
*/
Route::prefix('trainer')->middleware('auth:sanctum')->group(function () {
   // Route::get('sessions', [TrainingSessionController::class, 'index']);
    // Add more trainer routes here
});
