<?php

namespace src;

class Task9
{
    public static function main(array $arr, int $number): array
    {
        $result = array();
        for ($i = 0; $i < count($arr) - 2; $i++) {
            if ($arr[$i] + $arr[$i + 1] + $arr[$i + 2] == $number) {
                $result[] = $arr[$i] . " + " . $arr[$i + 1] . " + " . $arr[$i + 2] . " = " . $number;
            }
        }
        return $result;
    }
}

$arr = [2, 7, 7, 1, 8, 2, 7, 8, 7];
$number = readline('Input number: ');

if (!is_numeric($number)) {
    throw new \InvalidArgumentException();
}

Task9::main($arr, $number);
