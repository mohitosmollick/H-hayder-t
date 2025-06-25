<?php

class MathCalculator{
    const PI = 3.1416;
    const SUPPORTED_OPERATIONS = ['Add', 'Subtract', 'multiply'];

    function valueOfPi(){
        echo "Value of PI is ". self::PI;
    }
}

$match = new MathCalculator;

$match->valueOfPi();