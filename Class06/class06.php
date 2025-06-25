<?php 

class BankAccount{

    function __construct(private $ac, private $balance = 0){

    }

    function addAccountNumber($ac){
        $this->ac = $ac;
    }
    function deposit($amount){
        $this->balance += $amount;
    }
    function withdraw($amount){
        if($amount >  $this->balance){
            echo "Insufficient Balance For withdraw";
            return;
        }
        $this->balance -= $amount;
    }
    function getBalance(){
        return $this->balance;
    }

}

$dipAccount = new BankAccount('42143', '10000');
$dipAccount->deposit('5000');
$dipAccount->withdraw('20000');
echo "</br>";
echo "Your Account Balance: ". $dipAccount->getBalance();

echo "</br>";
$sagorAccount = new BankAccount('42163', '20000');
$sagorAccount->deposit('5000');
$sagorAccount->withdraw('30000');
echo "</br>";
echo "Your Account Balance: ". $sagorAccount->getBalance();