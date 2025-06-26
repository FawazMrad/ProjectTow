<?php

namespace Database\Seeders;

use App\Models\Bill;
use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bill1 = Bill::where('patient_id', 1)->first();
        $bill2 = Bill::where('patient_id', 2)->first();
        $bill3 = Bill::where('patient_id', 3)->first();

        // Payment with bill_id 1
        Payment::create([
            'bill_id' => $bill1->id,
            'amount' => 100.00,
        ]);

        // Another payment with same bill_id 1
        Payment::create([
            'bill_id' => $bill1->id,
            'amount' => 100.00,
        ]);

        // Payment with bill_id 2
        Payment::create([
            'bill_id' => $bill2->id,
            'amount' => 300.00,
        ]);

        // Payment with bill_id 3
        Payment::create([
            'bill_id' => $bill3->id,
            'amount' => 75.00,
        ]);

        // Another payment with same bill_id 3
        Payment::create([
            'bill_id' => $bill3->id,
            'amount' => 75.00,
        ]);

    }
}
