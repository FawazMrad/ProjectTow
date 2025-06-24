<?php

namespace App\Helpers;

use Carbon\Carbon;

class DateTimeHelper
{

    public static function now(): Carbon
    {
        return now();
    }

    public static function getCurrentMonthRange(): array
    {
        return [
            'start' => static::now()->startOfMonth(),
            'end' => static::now()->endOfMonth()
        ];
    }


    public static function getLastMonthRange(): array
    {
        return [
            'start' => static::now()->subMonth()->startOfMonth(),
            'end' => static::now()->subMonth()->endOfMonth()
        ];
    }


    public static function getPreviousMonthsRange(int $months): array
    {
        return [
            'start' => static::now()->subMonths($months)->startOfMonth(),
            'end' => static::now()->subMonth()->endOfMonth()
        ];
    }


    public static function formatRangeForHumans(Carbon $start, Carbon $end): string
    {
        if ($start->month === $end->month) {
            return $start->format('F Y');
        }
        return $start->format('M Y') . ' - ' . $end->format('M Y');
    }



}
