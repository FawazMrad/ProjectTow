<?php

namespace Database\Seeders;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Appointment::create([
            'patient_id' => 1,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->subMonth()->setTime(9, 0),
            'end_time' => Carbon::now()->subMonth()->setTime(9, 30),
            'notes' => 'ملاحظة 1',
            'status' => 'معلق',
            'type' => 'علاجي',
        ]);

        Appointment::create([
            'patient_id' => 2,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->subDays(20)->setTime(10, 0),
            'end_time' => Carbon::now()->subDays(20)->setTime(10, 30),
            'notes' => 'ملاحظة 2',
            'status' => 'مقبول',
            'type' => 'تنضيف',
        ]);

        Appointment::create([
            'patient_id' => 3,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->subDays(15)->setTime(14, 0),
            'end_time' => Carbon::now()->subDays(15)->setTime(14, 30),
            'notes' => 'ملاحظة 3',
            'status' => 'مؤجل',
            'type' => 'تجميل',
        ]);

        Appointment::create([
            'patient_id' => 4,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->subDays(10)->setTime(16, 0),
            'end_time' => Carbon::now()->subDays(10)->setTime(16, 30),
            'notes' => 'ملاحظة 4',
            'status' => 'مرفوض',
            'type' => 'أطفال',
        ]);

        Appointment::create([
            'patient_id' => 5,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->subDays(5)->setTime(11, 0),
            'end_time' => Carbon::now()->subDays(5)->setTime(11, 30),
            'notes' => 'ملاحظة 5',
            'status' => 'كامل',
            'type' => 'دراسة طبية',
        ]);

        Appointment::create([
            'patient_id' => 6,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->subDays(3)->setTime(8, 0),
            'end_time' => Carbon::now()->subDays(3)->setTime(8, 30),
            'notes' => 'ملاحظة 6',
            'status' => 'غياب',
            'type' => 'علاجي',
        ]);

        Appointment::create([
            'patient_id' => 7,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->addDays(1)->setTime(10, 0),
            'end_time' => Carbon::now()->addDays(1)->setTime(10, 30),
            'notes' => 'ملاحظة 7',
            'status' => 'معلق',
            'type' => 'تنضيف',
        ]);

        Appointment::create([
            'patient_id' => 8,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->addDays(3)->setTime(14, 0),
            'end_time' => Carbon::now()->addDays(3)->setTime(14, 30),
            'notes' => 'ملاحظة 8',
            'status' => 'مقبول',
            'type' => 'تجميل',
        ]);

        Appointment::create([
            'patient_id' => 9,
            'doctor_id' =>1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->addDays(7)->setTime(16, 0),
            'end_time' => Carbon::now()->addDays(7)->setTime(16, 30),
            'notes' => 'ملاحظة 9',
            'status' => 'مؤجل',
            'type' => 'أطفال',
        ]);

        Appointment::create([
            'patient_id' => 10,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->addDays(10)->setTime(11, 0),
            'end_time' => Carbon::now()->addDays(10)->setTime(11, 30),
            'notes' => 'ملاحظة 10',
            'status' => 'مرفوض',
            'type' => 'دراسة طبية',
        ]);
        Appointment::create([
            'patient_id' => 11,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->addDays(12)->setTime(9, 0),
            'end_time' => Carbon::now()->addDays(12)->setTime(9, 30),
            'notes' => 'ملاحظة 11',
            'status' => 'كامل',
            'type' => 'علاجي',
        ]);

        Appointment::create([
            'patient_id' => 12,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->addDays(14)->setTime(10, 0),
            'end_time' => Carbon::now()->addDays(14)->setTime(10, 30),
            'notes' => 'ملاحظة 12',
            'status' => 'غياب',
            'type' => 'تنضيف',
        ]);

        Appointment::create([
            'patient_id' => 13,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->addDays(15)->setTime(11, 0),
            'end_time' => Carbon::now()->addDays(15)->setTime(11, 30),
            'notes' => 'ملاحظة 13',
            'status' => 'معلق',
            'type' => 'تجميل',
        ]);

        Appointment::create([
            'patient_id' => 14,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->addDays(16)->setTime(13, 0),
            'end_time' => Carbon::now()->addDays(16)->setTime(13, 30),
            'notes' => 'ملاحظة 14',
            'status' => 'مقبول',
            'type' => 'أطفال',
        ]);

        Appointment::create([
            'patient_id' => 15,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->addDays(17)->setTime(15, 0),
            'end_time' => Carbon::now()->addDays(17)->setTime(15, 30),
            'notes' => 'ملاحظة 15',
            'status' => 'مؤجل',
            'type' => 'دراسة طبية',
        ]);

        Appointment::create([
            'patient_id' => 16,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->addDays(18)->setTime(8, 0),
            'end_time' => Carbon::now()->addDays(18)->setTime(8, 30),
            'notes' => 'ملاحظة 16',
            'status' => 'مرفوض',
            'type' => 'علاجي',
        ]);

        Appointment::create([
            'patient_id' => 17,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->addDays(19)->setTime(10, 0),
            'end_time' => Carbon::now()->addDays(19)->setTime(10, 30),
            'notes' => 'ملاحظة 17',
            'status' => 'كامل',
            'type' => 'تنضيف',
        ]);

        Appointment::create([
            'patient_id' => 18,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->addDays(20)->setTime(11, 0),
            'end_time' => Carbon::now()->addDays(20)->setTime(11, 30),
            'notes' => 'ملاحظة 18',
            'status' => 'غياب',
            'type' => 'تجميل',
        ]);

        Appointment::create([
            'patient_id' => 19,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->addDays(21)->setTime(14, 0),
            'end_time' => Carbon::now()->addDays(21)->setTime(14, 30),
            'notes' => 'ملاحظة 19',
            'status' => 'معلق',
            'type' => 'أطفال',
        ]);

        Appointment::create([
            'patient_id' => 20,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->addDays(22)->setTime(15, 0),
            'end_time' => Carbon::now()->addDays(22)->setTime(15, 30),
            'notes' => 'ملاحظة 20',
            'status' => 'مقبول',
            'type' => 'دراسة طبية',
        ]);

        Appointment::create([
            'patient_id' => 21,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->addDays(23)->setTime(9, 0),
            'end_time' => Carbon::now()->addDays(23)->setTime(9, 30),
            'notes' => 'ملاحظة 21',
            'status' => 'مؤجل',
            'type' => 'علاجي',
        ]);

        Appointment::create([
            'patient_id' => 22,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->addDays(24)->setTime(10, 0),
            'end_time' => Carbon::now()->addDays(24)->setTime(10, 30),
            'notes' => 'ملاحظة 22',
            'status' => 'مرفوض',
            'type' => 'تنضيف',
        ]);

        Appointment::create([
            'patient_id' => 23,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->addDays(25)->setTime(11, 0),
            'end_time' => Carbon::now()->addDays(25)->setTime(11, 30),
            'notes' => 'ملاحظة 23',
            'status' => 'كامل',
            'type' => 'تجميل',
        ]);

        Appointment::create([
            'patient_id' => 24,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->addDays(26)->setTime(14, 0),
            'end_time' => Carbon::now()->addDays(26)->setTime(14, 30),
            'notes' => 'ملاحظة 24',
            'status' => 'غياب',
            'type' => 'أطفال',
        ]);

        Appointment::create([
            'patient_id' => 25,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->addDays(27)->setTime(15, 0),
            'end_time' => Carbon::now()->addDays(27)->setTime(15, 30),
            'notes' => 'ملاحظة 25',
            'status' => 'معلق',
            'type' => 'دراسة طبية',
        ]);

        Appointment::create([
            'patient_id' => 26,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->addDays(28)->setTime(9, 0),
            'end_time' => Carbon::now()->addDays(28)->setTime(9, 30),
            'notes' => 'ملاحظة 26',
            'status' => 'مقبول',
            'type' => 'علاجي',
        ]);

        Appointment::create([
            'patient_id' => 27,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->addDays(29)->setTime(10, 0),
            'end_time' => Carbon::now()->addDays(29)->setTime(10, 30),
            'notes' => 'ملاحظة 27',
            'status' => 'مؤجل',
            'type' => 'تنضيف',
        ]);

        Appointment::create([
            'patient_id' => 28,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->addDays(30)->setTime(11, 0),
            'end_time' => Carbon::now()->addDays(30)->setTime(11, 30),
            'notes' => 'ملاحظة 28',
            'status' => 'مرفوض',
            'type' => 'تجميل',
        ]);

        Appointment::create([
            'patient_id' => 29,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->addDays(31)->setTime(14, 0),
            'end_time' => Carbon::now()->addDays(31)->setTime(14, 30),
            'notes' => 'ملاحظة 29',
            'status' => 'كامل',
            'type' => 'أطفال',
        ]);

        Appointment::create([
            'patient_id' => 30,
            'doctor_id' => 1,
            'receptionist_id' => null,
            'parent_appointment_id' => null,
            'bill_id' => null,
            'medical_study_id' => null,
            'start_time' => Carbon::now()->addDays(32)->setTime(15, 0),
            'end_time' => Carbon::now()->addDays(32)->setTime(15, 30),
            'notes' => 'ملاحظة 30',
            'status' => 'غياب',
            'type' => 'دراسة طبية',
        ]);

    }
}
