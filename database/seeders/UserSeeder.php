<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

        public function run(): void
    {
//        User::factory()->create([
//            'role' => 'DOCTOR',
//            'user_name' => 'Dr. Ahmad Said',
//            'email' => 'doctor@example.com',
//        ]);
//
//        User::factory()->create([
//            'role' => 'RECEPTIONIST',
//            'user_name' => 'Receptionist Layla',
//            'email' => 'layla@example.com',
//        ]);
//
//        User::factory()->create([
//            'role' => 'RECEPTIONIST',
//            'user_name' => 'Receptionist Huda',
//            'email' => 'huda@example.com',
//        ]);

        User::factory()->create([
            'role' => 'TRAINEE',
            'user_name' => 'Trainer Huda',
            'email' => 'trainer1@example.com',
        ]);

        User::factory()->create([
            'role' => 'TRAINEE',
            'user_name' => 'Trainer Ahmad',
            'email' => 'ahmad@example.com',
        ]);
    }

}
