<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    
<pre>
    <?php
    $a = ['Han ueli', 'Peter Müller', 'Samuel Heiniker', 'Rita Komolara', 'Renne Spitz'];

    var_dump(count($a));


    $winner = rand(0,4);
    var_dump($winner);
    var_dump ($a[$winner]);

    ?>
</pre>
</body>
</html>