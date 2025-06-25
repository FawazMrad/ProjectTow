<?php

namespace App\Helpers;

class ArabicHelper
{
    public function getArabicDayName(int $dayIndex): string
    {
        return [
            'الاحد',     // 0
            'الاثنين',   // 1
            'الثلاثاء',  // 2
            'الاربعاء',  // 3
            'الخميس',    // 4
            'الجمعة',    // 5
            'السبت',     // 6
        ][$dayIndex];
    }
}
