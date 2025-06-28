<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

        public function run(): void
    {
        $images = [];

        for ($i = 1; $i <= 20; $i++) {
            $images[] = [
                'appointment_id' => (($i - 1) % 5) + 1, // values from 1 to 5 repeatedly
                'image' => 'images/appointment_' . $i . '.jpg',
                'image_notes' => 'Note for image ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('appointment_images')->insert($images);
    }

}
