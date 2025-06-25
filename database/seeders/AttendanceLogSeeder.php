<?php

namespace Database\Seeders;

use App\Models\AttendanceLog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendanceLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctor = \App\Models\User::factory()->create([
            'role' => 'DOCTOR',
            'user_name' => 'احمد سعيد',
            'email' => 'doctor@example.com',
        ]);

        // 👤 Create Receptionists
        $receptionist1 = \App\Models\User::factory()->create([
            'role' => 'RECEPTIONIST',
            'user_name' => 'ليلى عانب',
            'email' => 'layla@example.com',
        ]);

        $receptionist2 = \App\Models\User::factory()->create([
            'role' => 'RECEPTIONIST',
            'user_name' => 'فادي سارى',
            'email' => 'huda@example.com',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-04-02 08:00:00',
            'check_out' => '2025-04-02 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-02 08:00:00',
            'check_out' => '2025-04-02 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-04-02 08:00:00',
            'check_out' => '2025-04-02 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-04 14:00:00',
            'check_out' => '2025-04-04 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-04-04 14:00:00',
            'check_out' => '2025-04-04 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-04-04 14:00:00',
            'check_out' => '2025-04-04 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-04-05 14:00:00',
            'check_out' => '2025-04-05 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-04-05 14:00:00',
            'check_out' => '2025-04-05 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-04-05 14:00:00',
            'check_out' => '2025-04-05 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-04-06 08:00:00',
            'check_out' => '2025-04-06 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-06 08:00:00',
            'check_out' => '2025-04-06 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-04-06 08:00:00',
            'check_out' => '2025-04-06 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-04-07 08:00:00',
            'check_out' => '2025-04-07 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-04-07 08:00:00',
            'check_out' => '2025-04-07 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-04-07 08:00:00',
            'check_out' => '2025-04-07 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-04-08 08:00:00',
            'check_out' => '2025-04-08 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-04-08 08:00:00',
            'check_out' => '2025-04-08 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-08 08:00:00',
            'check_out' => '2025-04-08 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-04-09 08:00:00',
            'check_out' => '2025-04-09 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-09 08:00:00',
            'check_out' => '2025-04-09 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-04-09 08:00:00',
            'check_out' => '2025-04-09 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-10 08:00:00',
            'check_out' => '2025-04-10 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-10 08:00:00',
            'check_out' => '2025-04-10 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-04-10 08:00:00',
            'check_out' => '2025-04-10 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-11 08:00:00',
            'check_out' => '2025-04-11 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-04-11 08:00:00',
            'check_out' => '2025-04-11 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-04-11 08:00:00',
            'check_out' => '2025-04-11 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-12 14:00:00',
            'check_out' => '2025-04-12 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-04-12 14:00:00',
            'check_out' => '2025-04-12 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-04-12 14:00:00',
            'check_out' => '2025-04-12 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-13 08:00:00',
            'check_out' => '2025-04-13 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-13 08:00:00',
            'check_out' => '2025-04-13 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-04-13 08:00:00',
            'check_out' => '2025-04-13 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-04-14 14:00:00',
            'check_out' => '2025-04-14 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-14 14:00:00',
            'check_out' => '2025-04-14 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-14 14:00:00',
            'check_out' => '2025-04-14 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-15 08:00:00',
            'check_out' => '2025-04-15 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-15 08:00:00',
            'check_out' => '2025-04-15 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-15 08:00:00',
            'check_out' => '2025-04-15 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-04-17 08:00:00',
            'check_out' => '2025-04-17 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-04-17 08:00:00',
            'check_out' => '2025-04-17 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-04-17 08:00:00',
            'check_out' => '2025-04-17 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-18 08:00:00',
            'check_out' => '2025-04-18 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-04-18 08:00:00',
            'check_out' => '2025-04-18 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-04-18 08:00:00',
            'check_out' => '2025-04-18 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-04-19 08:00:00',
            'check_out' => '2025-04-19 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-19 08:00:00',
            'check_out' => '2025-04-19 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-04-19 08:00:00',
            'check_out' => '2025-04-19 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-22 14:00:00',
            'check_out' => '2025-04-22 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-22 14:00:00',
            'check_out' => '2025-04-22 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-22 14:00:00',
            'check_out' => '2025-04-22 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-04-23 08:00:00',
            'check_out' => '2025-04-23 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-04-23 08:00:00',
            'check_out' => '2025-04-23 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-23 08:00:00',
            'check_out' => '2025-04-23 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-24 08:00:00',
            'check_out' => '2025-04-24 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-24 08:00:00',
            'check_out' => '2025-04-24 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-04-24 08:00:00',
            'check_out' => '2025-04-24 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-25 08:00:00',
            'check_out' => '2025-04-25 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-04-25 08:00:00',
            'check_out' => '2025-04-25 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-04-25 08:00:00',
            'check_out' => '2025-04-25 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-26 08:00:00',
            'check_out' => '2025-04-26 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-04-26 08:00:00',
            'check_out' => '2025-04-26 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-04-26 08:00:00',
            'check_out' => '2025-04-26 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-04-28 08:00:00',
            'check_out' => '2025-04-28 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-04-28 08:00:00',
            'check_out' => '2025-04-28 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-28 08:00:00',
            'check_out' => '2025-04-28 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-04-29 14:00:00',
            'check_out' => '2025-04-29 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-04-29 14:00:00',
            'check_out' => '2025-04-29 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-04-29 14:00:00',
            'check_out' => '2025-04-29 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-05-01 14:00:00',
            'check_out' => '2025-05-01 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-01 14:00:00',
            'check_out' => '2025-05-01 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-05-01 14:00:00',
            'check_out' => '2025-05-01 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-02 14:00:00',
            'check_out' => '2025-05-02 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-02 14:00:00',
            'check_out' => '2025-05-02 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-02 14:00:00',
            'check_out' => '2025-05-02 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-03 08:00:00',
            'check_out' => '2025-05-03 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-05-03 08:00:00',
            'check_out' => '2025-05-03 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-05-03 08:00:00',
            'check_out' => '2025-05-03 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-04 14:00:00',
            'check_out' => '2025-05-04 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-05-04 14:00:00',
            'check_out' => '2025-05-04 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-04 14:00:00',
            'check_out' => '2025-05-04 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-06 14:00:00',
            'check_out' => '2025-05-06 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-05-06 14:00:00',
            'check_out' => '2025-05-06 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-05-06 14:00:00',
            'check_out' => '2025-05-06 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-05-07 14:00:00',
            'check_out' => '2025-05-07 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-05-07 14:00:00',
            'check_out' => '2025-05-07 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-07 14:00:00',
            'check_out' => '2025-05-07 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-05-08 08:00:00',
            'check_out' => '2025-05-08 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-08 08:00:00',
            'check_out' => '2025-05-08 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-08 08:00:00',
            'check_out' => '2025-05-08 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-05-09 14:00:00',
            'check_out' => '2025-05-09 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-09 14:00:00',
            'check_out' => '2025-05-09 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-05-09 14:00:00',
            'check_out' => '2025-05-09 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-11 08:00:00',
            'check_out' => '2025-05-11 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-05-11 08:00:00',
            'check_out' => '2025-05-11 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-11 08:00:00',
            'check_out' => '2025-05-11 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-12 14:00:00',
            'check_out' => '2025-05-12 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-12 14:00:00',
            'check_out' => '2025-05-12 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-12 14:00:00',
            'check_out' => '2025-05-12 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-13 14:00:00',
            'check_out' => '2025-05-13 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-13 14:00:00',
            'check_out' => '2025-05-13 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-13 14:00:00',
            'check_out' => '2025-05-13 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-14 14:00:00',
            'check_out' => '2025-05-14 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-14 14:00:00',
            'check_out' => '2025-05-14 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-14 14:00:00',
            'check_out' => '2025-05-14 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-15 14:00:00',
            'check_out' => '2025-05-15 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-15 14:00:00',
            'check_out' => '2025-05-15 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-15 14:00:00',
            'check_out' => '2025-05-15 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-16 14:00:00',
            'check_out' => '2025-05-16 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-16 14:00:00',
            'check_out' => '2025-05-16 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-16 14:00:00',
            'check_out' => '2025-05-16 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-17 08:00:00',
            'check_out' => '2025-05-17 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-17 08:00:00',
            'check_out' => '2025-05-17 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-17 08:00:00',
            'check_out' => '2025-05-17 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-18 14:00:00',
            'check_out' => '2025-05-18 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-18 14:00:00',
            'check_out' => '2025-05-18 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-05-18 14:00:00',
            'check_out' => '2025-05-18 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-19 14:00:00',
            'check_out' => '2025-05-19 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-05-19 14:00:00',
            'check_out' => '2025-05-19 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-19 14:00:00',
            'check_out' => '2025-05-19 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-20 14:00:00',
            'check_out' => '2025-05-20 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-20 14:00:00',
            'check_out' => '2025-05-20 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-20 14:00:00',
            'check_out' => '2025-05-20 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-21 08:00:00',
            'check_out' => '2025-05-21 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-21 08:00:00',
            'check_out' => '2025-05-21 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-21 08:00:00',
            'check_out' => '2025-05-21 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-22 08:00:00',
            'check_out' => '2025-05-22 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-22 08:00:00',
            'check_out' => '2025-05-22 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-22 08:00:00',
            'check_out' => '2025-05-22 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-05-24 14:00:00',
            'check_out' => '2025-05-24 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-24 14:00:00',
            'check_out' => '2025-05-24 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-24 14:00:00',
            'check_out' => '2025-05-24 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-25 14:00:00',
            'check_out' => '2025-05-25 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-25 14:00:00',
            'check_out' => '2025-05-25 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-25 14:00:00',
            'check_out' => '2025-05-25 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-05-26 14:00:00',
            'check_out' => '2025-05-26 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-26 14:00:00',
            'check_out' => '2025-05-26 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-05-26 14:00:00',
            'check_out' => '2025-05-26 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'ABSENT',
            'check_in' => null,
            'check_out' => null,
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-05-28 08:00:00',
            'check_out' => '2025-05-28 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-28 08:00:00',
            'check_out' => '2025-05-28 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-28 08:00:00',
            'check_out' => '2025-05-28 12:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-05-29 14:00:00',
            'check_out' => '2025-05-29 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-05-29 14:00:00',
            'check_out' => '2025-05-29 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-05-29 14:00:00',
            'check_out' => '2025-05-29 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-30 14:00:00',
            'check_out' => '2025-05-30 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-30 14:00:00',
            'check_out' => '2025-05-30 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'PRESENT',
            'check_in' => '2025-05-30 14:00:00',
            'check_out' => '2025-05-30 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 1,
            'user_type' => 'DOCTOR',
            'session_id' => null,
            'status' => 'LATE',
            'check_in' => '2025-05-31 14:00:00',
            'check_out' => '2025-05-31 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 2,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-31 14:00:00',
            'check_out' => '2025-05-31 20:00:00',
        ]);

        AttendanceLog::create([
            'user_id' => 3,
            'user_type' => 'RECEPTIONIST',
            'session_id' => null,
            'status' => 'SWAPPED',
            'check_in' => '2025-05-31 14:00:00',
            'check_out' => '2025-05-31 20:00:00',
        ]);

    }

}
