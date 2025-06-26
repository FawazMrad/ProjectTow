<?php

namespace Database\Seeders;

use App\Models\SubscriptionPlan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubscriptionPlan::create([
            'name' => 'Basic Monthly Plan',
            'type' => 'MONTHLY',
            'price' => 49.99,
            'discount_percentage' => 0,
            'free_sessions_limit' => 2,
            'description' => 'Suitable for occasional users. Includes 2 free sessions per month.',
            'is_active' => true,
            'points' => 10,
        ]);

        SubscriptionPlan::create([
            'name' => 'Pro Monthly Plan',
            'type' => 'MONTHLY',
            'price' => 89.99,
            'discount_percentage' => 10,
            'free_sessions_limit' => 5,
            'description' => 'Great for regular users. More sessions and discounted price.',
            'is_active' => true,
            'points' => 25,
        ]);

        SubscriptionPlan::create([
            'name' => 'Annual Saver Plan',
            'type' => 'YEARLY',
            'price' => 899.00,
            'discount_percentage' => 25,
            'free_sessions_limit' => 70,
            'description' => 'Save more with an annual commitment. Best value.',
            'is_active' => true,
            'points' => 300,
        ]);

        SubscriptionPlan::create([
            'name' => 'Legacy Plan',
            'type' => 'YEARLY',
            'price' => 799.00,
            'discount_percentage' => 15,
            'free_sessions_limit' => null,
            'description' => 'Old plan for legacy users. No session limits.',
            'is_active' => false,
            'points' => 200,
        ]);
    }
}
