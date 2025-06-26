<?php

namespace Database\Seeders;

use App\Models\MedicalStudy;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicalStudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MedicalStudy::create([
            'doctor_id' => 1,
            'title' => 'دراسة حول تأثير التغذية على مرضى السكري',
            'description' => 'تهدف هذه الدراسة إلى تحليل تأثير النظام الغذائي الصحي على التحكم بمستويات السكر في الدم لدى المرضى.',
            'start_date' => Carbon::now()->subMonths(6)->toDateString(),
            'end_date' => Carbon::now()->addMonths(2)->toDateString(),
            'is_active' => true,
        ]);

        MedicalStudy::create([
            'doctor_id' => 2,
            'title' => 'تحليل استجابة الجسم للقاحات الجديدة',
            'description' => 'دراسة علمية تبحث في مدى فعالية وسلامة اللقاحات الجديدة على مختلف الفئات العمرية.',
            'start_date' => Carbon::now()->subMonths(3)->toDateString(),
            'end_date' => Carbon::now()->addMonth()->toDateString(),
            'is_active' => true,
        ]);

        MedicalStudy::create([
            'doctor_id' => 3,
            'title' => 'أثر الرياضة على ضغط الدم المرتفع',
            'description' => 'تهدف الدراسة إلى قياس مدى تأثير ممارسة التمارين الرياضية على تقليل ضغط الدم المرتفع.',
            'start_date' => '2023-01-10',
            'end_date' => '2023-06-10',
            'is_active' => false,
        ]);

        MedicalStudy::create([
            'doctor_id' => 1,
            'title' => 'تأثير النوم الكافي على الصحة النفسية',
            'description' => 'تحليل العلاقة بين عدد ساعات النوم اليومية وتحسن المزاج وجودة الحياة النفسية.',
            'start_date' => '2022-11-01',
            'end_date' => '2023-03-01',
            'is_active' => false,
        ]);

        MedicalStudy::create([
            'doctor_id' => 2,
            'title' => 'العلاج الطبيعي لحالات خشونة الركبة',
            'description' => 'دراسة فعالية العلاج الطبيعي في تحسين حركة مفصل الركبة وتقليل الألم.',
            'start_date' => '2022-06-15',
            'end_date' => '2022-12-15',
            'is_active' => false,
        ]);

        MedicalStudy::create([
            'doctor_id' => 3,
            'title' => 'فعالية التأمل في تقليل التوتر',
            'description' => 'بحث علمي حول تأثير التأمل واليوغا على مستويات التوتر والقلق.',
            'start_date' => '2021-04-01',
            'end_date' => '2021-10-01',
            'is_active' => false,
        ]);

        MedicalStudy::create([
            'doctor_id' => 1,
            'title' => 'مقارنة بين أدوية ارتفاع الكوليسترول',
            'description' => 'تحليل الفروقات في الاستجابة للأدوية الشائعة لعلاج ارتفاع الكوليسترول.',
            'start_date' => '2020-02-10',
            'end_date' => '2020-08-10',
            'is_active' => false,
        ]);

        MedicalStudy::create([
            'doctor_id' => 2,
            'title' => 'تأثير الصيام على المناعة',
            'description' => 'دراسة العلاقة بين الصيام وتغير مؤشرات الجهاز المناعي.',
            'start_date' => '2021-07-01',
            'end_date' => '2021-12-01',
            'is_active' => false,
        ]);

        MedicalStudy::create([
            'doctor_id' => 3,
            'title' => 'فعالية برامج الوقاية من السرطان',
            'description' => 'تحليل نتائج حملات التوعية والفحص المبكر وتأثيرها في الوقاية من السرطان.',
            'start_date' => '2019-03-15',
            'end_date' => '2019-09-15',
            'is_active' => false,
        ]);

        MedicalStudy::create([
            'doctor_id' => 1,
            'title' => 'العلاقة بين السمنة وأمراض القلب',
            'description' => 'بحث معمق في كيفية تأثير السمنة على احتمالية الإصابة بأمراض القلب المزمنة.',
            'start_date' => '2020-05-20',
            'end_date' => '2020-11-20',
            'is_active' => false,
        ]);
    }
}
