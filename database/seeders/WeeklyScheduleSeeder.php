<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeeklyScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     public function run(): void
     {
         $daysOfWeek = [
             'السبت',
             'الاحد',
             'الاثنين',
             'الثلاثاء',
             'الاربعاء',
             'الخميس',
             'الجمعة',
         ];

         foreach ($daysOfWeek as $day) {
             DB::table('weekly_schedules')->insert([
                 'doctor_id'        => 1,
                 'day_of_week'      => $day,
                 'start_time'       => '08:00:00',
                 'end_time'         => '16:00:00',
                 'break_start_time' => '12:00:00',
                 'break_end_time'   => '13:00:00',
                 'is_active'        => true,
                 'created_at'       => now(),
                 'updated_at'       => now(),
             ]);
         }
     }
}
