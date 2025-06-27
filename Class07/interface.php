<?php

// abstract use korle akta abstract extends kore jai.. 
// but
// interface use korle multiple interface implement kora jai

// interface name last a able use kora uchit

interface Flyable{
    function Fly();
}
interface Swimable{
    function Swim();
}
interface Walkable{
    function Walk();
}

class Bird implements Flyable, Walkable{
    function Fly(){
        echo "Bird Flying";
    }
    function Walk(){
        echo "Bird walking";
    }
}

class Fish implements Swimable{
    function Swim(){
        echo "Fish Swimming";
    }
}

class Human implements Walkable, Swimable{
    function Walk(){
        echo "Man walking";
    }
    function Swim(){
        echo "Man Swimming";
    }
}


function register(Walkable $walkable){
    echo "you are Welcome !";
}

function walkingCompetition(Walkable $walkable){
    $walkable->Walk();
}

$bird = new Bird();
$fish = new Fish();
$human = new Human();

register($bird);
register($fish);
