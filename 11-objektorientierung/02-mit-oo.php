<?php

class BankAccount{
      /*
    public $iban; // IBAN-Eigenschaft des Bankkontos
    public $balance; // Balance-Eigenschaft des Bankkontos
  
    function __construct($i, $b){ //konstruktor
        $this->iban = $i; // Setzen der IBAN
        $this->balance = $b; // Setzen des Kontostands
        var_dump("__construct() wurde aufgerufen");
    } // Konstruktor
    */

    function __construct(public string $iban, public float $balance){
           
    }



    function printBalance(){ // Methode
        echo "Der Kontostand von {$this->iban} ist: {$this->balance} Euro\n";
        echo 'Kontostand wird ausgegeben....';
    }
}

// var_dump("vor new BankAccount() wurde aufgerufen");
$account1 = new BankAccount('DE12345679153', 750); // erstellt eine neue Instanz der Klasse BankAccount mit IBAN 'DE12345679153' und einem Kontostand von 750 Euro
// var_dump("nach new BankAccount() wurde aufgerufen");
$account1->printBalance();

$account2 = new BankAccount('CH70003333949393', 8399); // erstellt eine neue Instanz der Klasse BankAccount mit IBAN 'CH70003333949393' und einem Kontostand von 8399 Euro
$account2->printBalance();

?>
