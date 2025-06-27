<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Web\HomePageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| WEB Routes
|--------------------------------------------------------------------------
*/

Route::prefix('web')->middleware('api')->group(function () {

    Route::post('doctor-account/login', [AuthController::class, 'doctorLogin']);


    Route::middleware('auth:sanctum')->group(function () {
        Route::get('homepage/receptionists-commitment', [HomePageController::class, 'receptionistCommitment']);
        Route::get('homepage/receptionists', [HomePageController::class, 'indexReceptionists']);
        Route::get('receptionist/{id}', [\App\Http\Controllers\Web\ReceptionistController::class, 'getReceptionist']);
        Route::delete('receptionist/delete', [\App\Http\Controllers\Web\ReceptionistController::class, 'deleteReceptionist']);
        Route::get('receptionist/get-logs/{id}', [\App\Http\Controllers\Web\ReceptionistController::class, 'getLogs']);
        Route::post('receptionist/add', [\App\Http\Controllers\Web\ReceptionistController::class, 'addReceptionist']);
        Route::post('doctor-account/change-password', [\App\Http\Controllers\Auth\AuthController::class, 'changePassword']);
        Route::post('doctor-account/change-email', [\App\Http\Controllers\Auth\AuthController::class, 'changeEmail']);
        Route::get('doctor-account/get-logs', [\App\Http\Controllers\Web\DoctorController::class, 'getLogs']);
        Route::get('doctor-account/logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout']);


    });
});
/*
|--------------------------------------------------------------------------
| DOCTOR Routes
|--------------------------------------------------------------------------
*/
Route::prefix('doctor')->middleware('api')->group(function () {

    Route::post('login', [AuthController::class, 'doctorLogin']);


    Route::middleware('auth:sanctum')->group(function () {
        Route::get('weekly-schedule', [\App\Http\Controllers\DoctorApp\WeeklyScheduleController::class, 'index']);
        Route::post('weekly-schedule/update', [\App\Http\Controllers\DoctorApp\WeeklyScheduleController::class, 'update']);
        Route::get('appointments/view-today-appointments', [\App\Http\Controllers\DoctorApp\AppointmentController::class, 'viewTodayAppointments']);
        Route::get('appointments/view-upcoming-appointments', [\App\Http\Controllers\DoctorApp\AppointmentController::class, 'viewUpcomingAppointments']);
        Route::get('appointments/view-appointment/{id}', [\App\Http\Controllers\DoctorApp\AppointmentController::class, 'viewAppointment']);
        Route::post('appointments/update', [\App\Http\Controllers\DoctorApp\AppointmentController::class, 'updateAppointment']);
        Route::get('weekly-schedule/get-work-days', [\App\Http\Controllers\DoctorApp\WeeklyScheduleController::class, 'getWorkDays']);
        Route::post('appointments/schedule', [\App\Http\Controllers\DoctorApp\AppointmentController::class, 'scheduleAppointment']);
        Route::post('appointments/add-images', [\App\Http\Controllers\DoctorApp\AppointmentController::class, 'addImagesToAppointment']);
        Route::get('patients/get-patient/{id}', [\App\Http\Controllers\DoctorApp\PatientController::class, 'getPatient']);
        Route::get('medical-studies', [\App\Http\Controllers\DoctorApp\MedicalStudyController::class, 'index']);
        Route::get('medical-studies/get/{id}', [\App\Http\Controllers\DoctorApp\MedicalStudyController::class, 'getMedicalStudy']);
        Route::get('medical-studies/get-volunteers', [\App\Http\Controllers\DoctorApp\MedicalStudyController::class, 'getMedicalStudyVolunteers']);
        Route::post('medical-studies/create', [\App\Http\Controllers\DoctorApp\MedicalStudyController::class, 'createMedicalStudy']);
        Route::post('medical-studies/create-study-volunteer', [\App\Http\Controllers\DoctorApp\MedicalStudyController::class, 'createMedicalStudyVolunteer']);
        Route::get('bills/', [\App\Http\Controllers\DoctorApp\BillController::class, 'index']);
        Route::get('bills/get/{id}', [\App\Http\Controllers\DoctorApp\BillController::class, 'getBillWithPayments']);
        Route::get('bills/search/{patient_name}', [\App\Http\Controllers\DoctorApp\BillController::class, 'search']);

    });
});

/*
|--------------------------------------------------------------------------
| RECEPTIONIST Routes
|--------------------------------------------------------------------------
*/
Route::prefix('receptionist')->middleware('api')->group(function () {

    Route::post('login', [AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::get('logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout']);
        Route::post('change-password', [\App\Http\Controllers\Auth\AuthController::class, 'changePassword']);
        Route::post('change-email', [\App\Http\Controllers\Auth\AuthController::class, 'changeEmail']);

    });

});

/*
|--------------------------------------------------------------------------
| TRAINER Routes
|--------------------------------------------------------------------------
*/
Route::prefix('trainer')->middleware('api')->group(function () {
    Route::post('login', [AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::get('logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout']);
        Route::post('change-password', [\App\Http\Controllers\Auth\AuthController::class, 'changePassword']);
        Route::post('change-email', [\App\Http\Controllers\Auth\AuthController::class, 'changeEmail']);

    });

});

