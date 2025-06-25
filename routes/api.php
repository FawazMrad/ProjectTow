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

    Route::post('doctor-account/login', [DoctorAuthController::class, 'login']);


    Route::middleware('auth:sanctum')->group(function () {
        Route::get('homepage/receptionists-commitment', [HomePageController::class, 'receptionistCommitment']);
        Route::get('homepage/receptionists', [HomePageController::class, 'indexReceptionists']);
        Route::post('receptionist', [\App\Http\Controllers\Web\ReceptionistController::class, 'getReceptionist']);
        Route::post('receptionist/delete', [\App\Http\Controllers\Web\ReceptionistController::class, 'deleteReceptionist']);
        Route::post('receptionist/get-logs', [\App\Http\Controllers\Web\ReceptionistController::class, 'getLogs']);
        Route::post('receptionist/add', [\App\Http\Controllers\Web\ReceptionistController::class, 'addReceptionist']);
        Route::post('doctor-account/change-password', [\App\Http\Controllers\Auth\DoctorAuthController::class, 'changePassword']);
        Route::post('doctor-account/change-email', [\App\Http\Controllers\Auth\DoctorAuthController::class, 'changeEmail']);
        Route::get('doctor-account/get-logs', [\App\Http\Controllers\Web\DoctorController::class, 'getLogs']);
        Route::get('doctor-account/logout', [\App\Http\Controllers\Auth\DoctorAuthController::class, 'logout']);


    });
});
/*
|--------------------------------------------------------------------------
| DOCTOR Routes
|--------------------------------------------------------------------------
*/
Route::prefix('doctor')->middleware('api')->group(function () {

    Route::post('login', [DoctorAuthController::class, 'login']);


    Route::middleware('auth:sanctum')->group(function () {
        Route::get('weekly-schedule', [\App\Http\Controllers\DoctorApp\WeeklyScheduleController::class, 'index']);
        Route::post('weekly-schedule/update', [\App\Http\Controllers\DoctorApp\WeeklyScheduleController::class, 'update']);
        Route::get('appointments/view-today-appointments', [\App\Http\Controllers\DoctorApp\AppointmentController::class, 'viewTodayAppointments']);
        Route::get('appointments/view-upcoming-appointments', [\App\Http\Controllers\DoctorApp\AppointmentController::class, 'viewUpcomingAppointments']);
        Route::post('appointments/view-appointment', [\App\Http\Controllers\DoctorApp\AppointmentController::class, 'viewAppointment']);
        Route::post('appointments/update', [\App\Http\Controllers\DoctorApp\AppointmentController::class, 'updateAppointment']);
        Route::get('weekly-schedule/get-work-days', [\App\Http\Controllers\DoctorApp\WeeklyScheduleController::class, 'getWorkDays']);
        Route::post('appointments/schedule', [\App\Http\Controllers\DoctorApp\AppointmentController::class, 'scheduleAppointment']);
        Route::post('appointments/add-images', [\App\Http\Controllers\DoctorApp\AppointmentController::class, 'addImagesToAppointment']);

    });
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
