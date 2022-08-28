<?php

namespace src;

class Task3
{
    public static function main(int $user_number): int
    {
        while (strlen($user_number) > 1) {
            $user_number = (array_sum(str_split($user_number)));
        }
        return $user_number;
    }
}

$user_number = (readline('Input your number: '));

if (!is_numeric($user_number)){
    throw new \InvalidArgumentException();
}

Task3::main(abs($user_number));
