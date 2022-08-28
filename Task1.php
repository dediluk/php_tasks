<?php

namespace src;

class Task1
{
    public static function main(int $inputNumber): string
    {
        return ($inputNumber > 10 ? ($inputNumber > 20 ? ($inputNumber > 30 ? 'More than 30' : 'More than 20') :
            'More than 10') : 'Equal or less than 10');
    }
}

$inputNumber = (int)readline('Enter a number: ');
Task1::main($inputNumber);
