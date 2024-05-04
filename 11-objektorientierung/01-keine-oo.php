<?php

$account1 = [
    'iban' => 'DE12345679153',
    'name' => 'Max Müller',
    'balance' => 750
];
$account2 = [
    'iban' => 'CH70003333949393',
    'name' => 'maier millena',
    'balance' => 8399
];
function print_balance($account){ // nun ist der Funktions name mit den Array oben verbunden.
    echo "Der Kontostand der IBN {$account['iban']} ist:  {$account['balance']} Euro.";
}
// print_balance($account1);
// print_balance($account2);
// print_balance([]);// gitb eine fehler meldung aus da die funktion mit den array verbunden ist.

function sepa (&$fromAccount, &$toAccount, $amount){
    if($fromAccount['balance'] > $amount){
        $fromAccount['balance'] = $fromAccount['balance'] - $amount;
        $toAccount['balance'] = $toAccount['balance'] + $amount;
        print_r($fromAccount);
    }
}

// sepa($account2, $account1,1500);
// print_r($account1);
// print_balance($account1);


?>
