<?php 

trait BalanceCalculator{
  function getBalance(){
       return $this->balance;
    }
    
    function widthdraw($amount){
        if($amount > $this->balance){
            echo "no withdraw";
            return;
        }
        $this->balance -= $amount;
    }

}

trait Deposit{

    function deposit($amount){
        $this->balance += $amount; 
    }
}


class BankAccount{

    use BalanceCalculator;
    use Deposit;
    function __construct(protected $balance){

    }

   protected function doSomething(){
        echo "Done \n";
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


class PersonalCalculator{

    function __construct(private $balance){

    }
    use BalanceCalculator;
    use Deposit;
}

class GiftCart{
    use BalanceCalculator;

}

$pa = new PersonalCalculator('500');
echo "\n";
$pa->widthdraw('1000');
echo $pa-> getBalance();
