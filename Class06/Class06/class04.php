<?php 

class ExpenseTracer{ //single responsibility principle

// encapsulation process total

    private $balance;
    private $items = [];

    function AddAmount($balance){
        $this->balance = $balance;
    }

    function addExpense($note, $amount){
        if($amount >  $this->getAmount()){
            echo "Insufficient Balance";
            return;
        }
        $this->items[$note] = $amount; //$note = $key
        // $this->balance =$amount;
    }

    function showExpense(){
        print_r($this->items);
    }
    
    function getAmount(){
        $_balance = $this->balance;
        foreach($this->items as $item=>$amount){
            $_balance -= $amount;
        }
        return $_balance;
    }
}

$myExpenses = new ExpenseTracer();
$myExpenses->AddAmount(5000);
echo $myExpenses->getAmount();

echo "</br>";
$myExpenses->addExpense('chicken',1000);
$myExpenses->addExpense('rice', 2000);
$myExpenses->addExpense('shirt',1000);
// $myExpenses->addExpense('watch',4000);

echo "</br>";
$myExpenses->showExpense();
echo "</br>";
echo $myExpenses->getAmount();
