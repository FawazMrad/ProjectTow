<?php

namespace Database\Seeders;

use App\Http\Controllers\DoctorApp\WeeklyScheduleController;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
           // UserSeeder::class,
            AttendanceLogSeeder::class,
            WeeklyScheduleSeeder::class,
            PatientSeeder::class,
            BillSeeder::class,
            AppointmentSeeder::class,
        ]);
       // User::factory()->count(10)->create();
    }
}
