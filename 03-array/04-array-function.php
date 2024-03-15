<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functionen</title>
</head>
<body>
    <pre><?php

      $a = [ 'max Muster', 'Anna Bannana', 'Ronaldo Besser als Messi', 'Wasser Melonen', 'Orange süss sauer'];
    
     var_dump(isset($a[0])); // gibt es dieses Element und das beim wert 0
     unset($a[0]); // lösche das ellement null, alle andere bleiben bestehen.
    
        ?>
    </pre>


    <pre>
        <?php 
        $b = ['orange','orange', 'Bannanen', 'Trauben'];

        /// wenn wir zwei mal etwas in der gleichen liste haben gibt es dafür ein befehel 
        var_dump(array_unique($b)); // nimmt die doplizierte array und löscht sie
        ?>
    </pre>
    
</body>
</html>