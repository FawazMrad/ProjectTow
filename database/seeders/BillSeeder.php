<?php

namespace Database\Seeders;

use App\Models\Bill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bill::create([
            'family_id' => null,
            'patient_id' => 1,
            'patient_subscription_id' => null,
            'payment_status' => 'PAID',
            'remain_amount' => 0,
            'discount' => 10.00,
            'is_family_bill' => false,
            'bill_amount' => 150.00,
        ]);

        Bill::create([
            'family_id' => null,
            'patient_id' => 2,
            'patient_subscription_id' => null,
            'payment_status' => 'UNPAID',
            'remain_amount' => 250.00,
            'discount' => 0,
            'is_family_bill' => false,
            'bill_amount' => 250.00,
        ]);

        Bill::create([
            'family_id' => null,
            'patient_id' => 3,
            'patient_subscription_id' => null,
            'payment_status' => 'PARTIAL',
            'remain_amount' => 100.00,
            'discount' => 5.00,
            'is_family_bill' => true,
            'bill_amount' => 200.00,
        ]);

        Bill::create([
            'family_id' => null,
            'patient_id' => 4,
            'patient_subscription_id' => null,
            'payment_status' => 'PAID',
            'remain_amount' => 0,
            'discount' => 20.00,
            'is_family_bill' => false,
            'bill_amount' => 180.00,
        ]);

        Bill::create([
            'family_id' => null,
            'patient_id' => 5,
            'patient_subscription_id' => null,
            'payment_status' => 'UNPAID',
            'remain_amount' => 300.00,
            'discount' => 0,
            'is_family_bill' => false,
            'bill_amount' => 300.00,
        ]);

        Bill::create([
            'family_id' => null,
            'patient_id' => 6,
            'patient_subscription_id' => null,
            'payment_status' => 'PARTIAL',
            'remain_amount' => 50.00,
            'discount' => 15.00,
            'is_family_bill' => true,
            'bill_amount' => 250.00,
        ]);

        Bill::create([
            'family_id' => null,
            'patient_id' => 7,
            'patient_subscription_id' => null,
            'payment_status' => 'PAID',
            'remain_amount' => 0,
            'discount' => 0,
            'is_family_bill' => false,
            'bill_amount' => 120.00,
        ]);

        Bill::create([
            'family_id' => null,
            'patient_id' => 8,
            'patient_subscription_id' => null,
            'payment_status' => 'UNPAID',
            'remain_amount' => 400.00,
            'discount' => 0,
            'is_family_bill' => false,
            'bill_amount' => 400.00,
        ]);

        Bill::create([
            'family_id' => null,
            'patient_id' => 9,
            'patient_subscription_id' => null,
            'payment_status' => 'PARTIAL',
            'remain_amount' => 120.00,
            'discount' => 25.00,
            'is_family_bill' => true,
            'bill_amount' => 300.00,
        ]);

        Bill::create([
            'family_id' => null,
            'patient_id' => 10,
            'patient_subscription_id' => null,
            'payment_status' => 'PAID',
            'remain_amount' => 0,
            'discount' => 5.00,
            'is_family_bill' => false,
            'bill_amount' => 180.00,
        ]);

    }
}
