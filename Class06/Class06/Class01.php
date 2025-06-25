<?php

class Person{

     function __construct(public $name, public $email,private $pass) {
    }
    function details(){
        echo "My name is {$this->name} and email {$this->email} password is {$this->pass}";
    }

    function isAdult(){
        return $this->pass >= 1000;
    }
}

$person = new Person("dip","dip@gmail.com","234");
$person2 = new Person("dip2","dip@gmail2.com","23421");
$person3 = new Person("dip3","dip@gmail3.com","23421");


if($person->isAdult()){
    echo " Valid";
}else{
    echo "Invalid";
}
// echo $person;
