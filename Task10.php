<?php

namespace src;

class Task10
{
    public static function main(int $input): array
    {
        $result = array();
        $result[] = $input;
        while ($input != 1) {
            if ($input % 2 == 0) {
                $input /= 2;
            } else {
                $input = 3 * $input + 1;
            }
            $result[] = $input;
        }
        return $result;
    }
}

$input = readline();

if (!is_numeric($input)) {
    throw new \InvalidArgumentException();
}

Task10::main($input);
