<?php 

class Calculator{
    static $PI = "3.1416";
    public static function Sum($a, $b){
        return $a + $b;
    }

    public static function multiply($a, $b){
        return $a * $b;
    }
}

$sum = Calculator::Sum(1,5);
echo $sum;

$val = Calculator::$PI;
echo $val;