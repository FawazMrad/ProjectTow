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
