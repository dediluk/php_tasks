<?php

namespace src;

class Task5
{

    public static function main(int $n): string
    {
        $prev_fib_number = '5';
        $fib_number = '8';

        if ($n == 1) {
            return 0;
        }

        while (strlen($fib_number) < $n) {
            $res = '';
            $in_memory = 0;

            for ($i = -1; $i > -strlen($prev_fib_number) - 1; $i--) {
                $tmp = (string)($prev_fib_number[$i] + $fib_number[$i] + $in_memory);
                $in_memory = 0;
                if (strlen($tmp) > 1) {
                    $in_memory = 1;
                }
                $res = $tmp[-1] . $res;
            }

            $prev_fib_number = $fib_number;
            $fib_number = ((int)substr($fib_number, 0, $i + 1) + $in_memory . $res);
            if ($fib_number[0] == 0) {
                $fib_number = substr($fib_number, 1);
            }
        }
        return $fib_number;
    }
}

$n = readline('Input length: ');

if (!is_numeric($n)){
    throw new \InvalidArgumentException();
}

echo Task5::main($n);


