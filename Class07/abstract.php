<?php

abstract class Shape{
    function getArea(){
    }
}

class Circle extends Shape{
    function __construct(private $radius){
    }

    function getArea(){
       return pi() * $this->radius * $this->radius;
    }

}

class Rectangle extends Shape{
    function __construct(private $w, private $h){
    }

    function getArea(){
        return $this->w * $this->h;
    }
}


function displayArea(Shape $shape){
    echo "The area is : {$shape->getArea()}";
}

$ra = new Rectangle(8,5);
displayArea($ra);
echo "\n";
$ci = new Circle(6);
displayArea($ci);