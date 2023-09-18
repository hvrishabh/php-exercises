<?php

class Calculator
{
    private static $result;
    public function __construct()
    {
        self::$result = 0;
    }
    public function getResult()
    {
        return self::$result;
    }

    public function add($number)
    {
        self::$result += $number;
    }

    public static function subtract($number)
    {
        self::$result -= $number;
    }
}

$calculator = new Calculator();

$calculator->add(4);
$calculator->add(5);
Calculator::subtract(3);

echo $calculator->getResult();
