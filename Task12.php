<?php

namespace src;

class Task12
{
    public static function main(): void
    {
        $obj = new MyCalculator(2, 32);
        echo $obj->multiply() . "\n";
        echo $obj->add()->divideBy(8) . "\n";
        echo $obj->subtract()->divideBy(8);
    }
}

class MyCalculator
{
    private int $x;
    private int $y;
    private float|int $lastResult;

    public function __toString()
    {
        return (string)$this->lastResult;
    }

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function add(): static
    {
        $this->lastResult = $this->x + $this->y;
        return $this;
    }

    public function multiply(): static
    {
        $this->lastResult = $this->x * $this->y;
        return $this;
    }

    public function divideBy(int $d): float|int
    {
        return $this->lastResult / $d;
    }

    public function subtract(): static
    {
        $this->lastResult = $this->x > $this->y ? $this->x - $this->y : $this->y - $this->x;
        return $this;
    }
}


Task12::main();
