<?php

namespace src;

class Task6
{
    public static function main(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday'): int
    {
        $counter = 0;

        $start_date = new \DateTime("$year-$month-01");
        $end_date = new \DateTime("$lastYear-$lastMonth-01");

        while ($start_date <= $end_date) {
            if (date("w", $start_date->getTimestamp()) == 1) {
                $counter += 1;
            }
            $start_date->modify('+1 month');
        }
        return $counter;
    }
}

$year = readline('Input start year:');
$lastYear = readline('Input last year:');
$month = readline('Input month:');
$lastMonth = readline('Input last month:');

if (!is_numeric($year) || !is_numeric($lastYear) || !is_numeric($month) || !is_numeric($lastMonth)) {
    throw new \InvalidArgumentException();
}

Task6::main($year, $lastYear, $month, $lastMonth);
