<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorNotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $channels = ['IN_APP'];
        $statuses = ['تم الارسال', 'انتظار'];
        $titles = [
            'موعد جديد',
            'تذكير بالموعد',
            'تغيير في الموعد',
            'إلغاء الموعد',
            'تأكيد الحضور'
        ];
        $bodies = [
            'لديك موعد جديد مع الدكتور في التاريخ المحدد',
            'نذكرك بموعدك غداً مع الدكتور',
            'تم تغيير موعدك إلى التاريخ الجديد',
            'نأسف لإعلامك بإلغاء الموعد',
            'شكراً لتأكيد حضورك للموعد'
        ];

        for ($i = 0; $i < 100; $i++) {
            $isReceptionNotification = 0;
            $hasPatient = (bool)rand(0, 1);
            $hasAppointment = (bool)rand(0, 1);
            $isSent = (bool)rand(0, 1);
            $isScheduled = (bool)rand(0, 1);

            // Create notification data
            $notification = [
                'user_id' => 1,
                'sender_id' => rand(1, 2), // Random sender between 1-10
                'patient_id' => $hasPatient ? rand(1, 50) : null,
                'appointment_id' => $hasAppointment ? rand(1, 10) : null,
                'title' => $titles[array_rand($titles)],
                'body' => $bodies[array_rand($bodies)],
                'channel' => $channels[array_rand($channels)],
                'status' => $statuses[array_rand($statuses)],
                'is_scheduled' => $isScheduled,
                'is_reception_notification' => $isReceptionNotification,
                'seen_at' => $isSent ? Carbon::now()->subDays(rand(1, 30)) : null,
                'created_at' => Carbon::now()->subDays(rand(1, 60)),
                'updated_at' => Carbon::now()->subDays(rand(0, 59)),
            ];

            DB::table('notifications')->insert($notification);
        }

        $this->command->info('100 notifications seeded successfully!');
    }
}
