<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALters inditifikation</title>
</head>
<body>
    <pre>
        <?php
        $agb= true;
        $age= 25;

        if($agb){
            if($age>=18){
                echo 'Bestellung okay!';
            }else{
                echo 'du bist zu Jung';
            }
        }else{
            echo 'Bestellung nicht möglich';
        }

        echo "\n-----\n";

        if($agb === false){
            echo 'agb nicht akzeptiert';

        }else if($age<18){
            echo 'bestellung verweigert du bist zu jung';
        }


        //rechnung prenzip das ist ein anderer code btw
        $bezhal = true;
        $cash = 10;
        $total = 100;
        if($bezhal){
            if($cash>=$total){
                echo 'gratuliere dir für den kauf';
            }else {
                echo 'tut mir leid derzeit hast du nicht genügend geld';
            }
        }

        echo "\n-----------\n";

        if($bezhal){
            if($cash < $total){
                echo 'tut uns sehr leid saldo Leer';

            }
        }

        ?>
    </pre>
</body>
</html>