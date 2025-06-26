<?php

namespace Database\Seeders;

use App\Models\SubscriptionPlan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSubscriptionPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $planIds = SubscriptionPlan::pluck('id')->toArray(); // make sure you seeded plans first

        if (count($planIds) < 2) {
            throw new \Exception('You must seed at least 2 subscription plans before running this.');
        }

        // Generate 10 rows for patient IDs 1 to 10
        for ($i = 1; $i <= 10; $i++) {
            $randomPlanId = $planIds[array_rand($planIds)];

            // Start date is today - random days between 0–30
            $startDate = now()->subDays(rand(0, 30))->toDateString();
            $endDate = \Carbon\Carbon::parse($startDate)->addMonths(1)->toDateString();

            \App\Models\PatientSubscription::create([
                'subscription_plan_id' => $randomPlanId,
                'patient_id' => $i,
                'start_date' => $startDate,
                'end_date' => $endDate,
                'used_free_sessions' => rand(0, 5),
                'is_active' => rand(0, 1),
            ]);
        }
    }
}
