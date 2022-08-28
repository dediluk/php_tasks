<?php

namespace src;

class Task2
{
    public static function main(string $date): int
    {
        $year = date('Y');

        $today = date_create('now');
        $today = strtotime(date_format($today, 'd.m.Y'));

        $b_day = date_create($date);
        $b_day_formatted = date_format($b_day, 'd.m.' . $year);

        if ($today > strtotime($b_day_formatted)) {
            $b_day_formatted = date_format($b_day, 'd.m.' . ((int)$year + 1));
        }

        $date_diff = strtotime($b_day_formatted) - $today;
        return $date_diff / (60 * 60 * 24);
    }
}

$b_day = readline('Enter a date in format "DD.MM.YYYY": ');

$pattern = "/\d{2}\.\d{2}\.\d{4}/";

if (!preg_match($pattern, $b_day )){
    throw new \InvalidArgumentException();
}
Task2::main($b_day);
