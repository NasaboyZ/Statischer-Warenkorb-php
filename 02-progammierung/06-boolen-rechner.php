19<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechnen mit Boolen</title>
</head>
<body>
    <pre>
        <?php
        $a = true;
        $b = false;
        var_dump(!$a);
        var_dump(!$b);
        echo "\n---\n";

        var_dump($a AND $b);

        echo "\n-----\n";
        $age = 16;
        $agb = true;

        if($age>=18 && $agb){
            echo 'Bestellund ist okay';
    
        } else{
            echo 'bestellung: Fehler aufgetreten';
        }

        ?>
    </pre>
</body>
</html>