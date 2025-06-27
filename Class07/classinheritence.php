<?php

class BankAccount{
    function __construct(protected $balance){

    }

   protected function doSomething(){
        echo "Done \n";
    }

    function getBalance(){
       return $this->balance;
    }

    function deposit($amount){
        $this->balance += $amount; 
    }

    function widthdraw($amount){
        if($amount > $this->balance){
            echo "no withdraw";
            return;
        }
        $this->balance -= $amount;
    }

}


class SavingsAccount extends BankAccount{
   function widthdraw($amount){
    if($amount > 5000){
            echo "Not Possible > 5000";
            return;
        }
        parent::widthdraw($amount);
   }

}

class CurrentAccount extends BankAccount{
    function widthdraw($amount){
        if($amount > 50000){
            echo "Not Possible > 50000";
            return;
        }
        parent::widthdraw($amount);
   }
}

$sa = new SavingsAccount('5000');
$sa->deposit('5000');
$sa->widthdraw('5500');
echo "\n";
echo $sa->getBalance();

echo "\n";

$ca = new CurrentAccount('5000');
$ca->deposit('50000');
$ca->widthdraw('51000');
echo "\n";
echo $ca->getBalance();