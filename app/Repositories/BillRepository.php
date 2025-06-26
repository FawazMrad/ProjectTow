<?php

namespace App\Repositories;

use App\Models\Bill;
use App\Repositories\Interfaces\BillRepositoryInterface;

class BillRepository implements BillRepositoryInterface
{
    public function all(): iterable
    {
        return Bill::all()->groupBy('payment_status');
    }

    public function findById(int $id): ?Bill
    {
        return Bill::find($id);
    }

    public function findByFamily(int $familyId): iterable
    {
        return Bill::where('family_id', $familyId)->get();
    }

    public function findByPatient(int $patientId): iterable
    {
        return Bill::where('patient_id', $patientId)->get();
    }

    public function findByStatus(string $status): iterable
    {
        return Bill::where('payment_status', $status)->get();
    }

    public function create(array $data): Bill
    {
        return Bill::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $bill = Bill::find($id);
        return $bill ? $bill->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $bill = Bill::find($id);
        return $bill ? $bill->delete() : false;
    }
    public function findByIdWithPayments($billId)
    {
        return Bill::where('id',$billId)->with('payments')->get();
    }
    public function searchByPatientName(string $name)
    {
        return \App\Models\Bill::where(function ($query) use ($name) {
            // Case 1: Bill has a patient directly
            $query->whereHas('patient', function ($q) use ($name) {
                $q->where('full_name', 'LIKE', '%' . $name . '%');
            });

            // Case 2: Bill has no patient_id but has appointments -> patient
            $query->orWhere(function ($q) use ($name) {
                $q->whereNull('patient_id')
                    ->whereHas('appointments.patient', function ($q2) use ($name) {
                        $q2->where('full_name', 'LIKE', '%' . $name . '%');
                    });
            });
        })

            ->whereHas('appointments', function ($q) {
                $q->whereNull('parent_appointment_id');
            })
            ->with([
                'payments',
                'patient' => function ($q) {
                    $q->with([
                        'subscriptions.subscriptionPlan'
                    ]);
                },
                'appointments' => function ($q) {
                    $q->whereNull('parent_appointment_id');
                },
            ])
            ->get();
    }



}
