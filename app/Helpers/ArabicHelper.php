<?php

namespace App\Helpers;

use Illuminate\Support\Carbon;

class ArabicHelper
{
    public function arabicDayName(Carbon $date): string
    {
        return [
            'Saturday'  => 'السبت',
            'Sunday'    => 'الاحد',
            'Monday'    => 'الاثنين',
            'Tuesday'   => 'الثلاثاء',
            'Wednesday' => 'الاربعاء',
            'Thursday'  => 'الخميس',
            'Friday'    => 'الجمعة',
        ][$date->englishDayOfWeek];
    }
}
