<?php

namespace src;

class Task4
{
    public static function main(string $user_line): string
    {
        $user_line = ucwords(str_replace(array('_', '-'), array(' ', ' '), $user_line));
        return str_replace(' ', '', $user_line);
    }
}

$user_line = readline('Input your line: ');
Task4::main($user_line);
