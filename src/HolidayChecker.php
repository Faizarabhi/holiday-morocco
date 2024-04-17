<?php

namespace Vendor\MoroccanHolidays;

use Carbon\Carbon;

class HolidayChecker
{
    public static function isTodayHoliday()
    {
        $holidays = self::getHolidaysForCurrentYear();
        $today = Carbon::now()->format('j M');

        foreach ($holidays as $holiday) {
            if ($holiday['Date'] === $today) {
                return ['status' =>true,  'name'=> $holiday['Name']];
            }
        }

        return false;
    }

    private static function getHolidaysForCurrentYear()
    {
        $currentYear = Carbon::now()->year;
        $holidaysJsonFile = __DIR__ . '/holidays.' . $currentYear . '.json';

        if (file_exists($holidaysJsonFile)) {
            $holidaysJson = file_get_contents($holidaysJsonFile);
            $holidaysData = json_decode($holidaysJson, true);
            return $holidaysData;
        }

        return [];
    }
}
