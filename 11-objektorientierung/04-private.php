<?php

class BankAccount{

    function __construct(private string $iban, private float $balance){}

    function printBalance(){ // Methode
        echo "Der Kontostand von {$this->iban} ist: {$this->balance} Euro\n";
    }

    function sepa(BankAccount $to, float $amount){
        if($this->balance < $amount){
            echo "Kontostand zu niedrig für Überweisung\n";
            return;
        }
        echo "Es wird überwiesen von {$this->iban} auf {$to->iban}: {$amount} Euro\n";
        $this->balance -= $amount; // $this->balance = $this->balance - $amount 
        $to->balance += $amount; // $to->balance = $to->balance + $amount
    }

    function getIban(){
        return $this->iban;
    }
    function getBalance(){
        return $this->balance;
    }
}

$account1 = new BankAccount('DE12345679153', 750); // erstellt eine neue Instanz der Klasse BankAccount mit IBAN 'DE12345679153' und einem Kontostand von 750 Euro
$account2 = new BankAccount('CH70003333949393', 8399); // erstellt eine neue Instanz der Klasse BankAccount mit IBAN 'CH70003333949393' und einem Kontostand von 8399 Euro

var_dump($account1 -> getIban());
var_dump($account1 -> getBalance());
// var_dump($account1-> balance);
?>
