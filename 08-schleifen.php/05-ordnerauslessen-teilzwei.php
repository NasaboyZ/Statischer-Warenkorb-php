<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dateieneinleasen</title>
</head>
<body>
    <pre>
        <?php
        echo $a = 'hallo welt';
        $handle = opendir(__DIR__.'/img');
        while(($filename = readdir($handel))!== false){ //in der zweiten klammer fassen wir was zusammen also diese zuweisung  da kommt also ein ergbnis raus und kommt direkt in die variable filename und dieses ergnenis in der variable können wir weiter verarbeiten und vergleichen
            if($filename === '.'|| $filename === '..') continue;
            var_dump($handel);


        }
        ?>
</pre>
</body>
</html>