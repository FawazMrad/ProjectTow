<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;
    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_name' => $this->faker->name(),
            'phone' => $this->faker->unique()->numerify('01#########'),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('password123'), // Default password
            'role' => 'TRAINEE', // default, override in seeder
            'college' => $this->faker->company(),
            'specialization' => $this->faker->randomElement(['Cardiology', 'Dermatology', 'Orthopedics']),
            'qr_code' => null,
            'is_accepted' => true,
        ];
    }
    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
