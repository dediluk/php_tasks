<?php

namespace src;

class Task7
{
    public static function main(array $arr, int $position): array
    {
        return array_merge(array_slice($arr, 0, $position), array_slice($arr, $position + 1));
    }
}

$arr = explode(' ', readline('Input array in format "1 2 3 4": '),);
$position = (int)readline('Input position: ');

if (!is_numeric($position)) {
    throw new \InvalidArgumentException();
}

Task7::main($arr, $position);
