<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
         <?php
         $a=[
             ['title'=>'budapest', 'content'=>'Budapest ost die Hauptstadt von ungarn.'],
             ['title'=>'Helsinki', 'content'=>'Helsinki ist die Hauptstad von Finnland.'],
             ['title'=>'Stockholm', 'content'=>'Stockholm ist die Hauptstad von Schweden.']
         ];

         //var_dump($a);
         print_r($a);

            ?>
            <?php
            $firstEntry = $a[0];
             var_dump($firstEntry['title']);
             var_dump($a[2]['title']);
             ?>
    </pre>
</body>
</html>