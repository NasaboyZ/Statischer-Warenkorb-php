<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach & continue und break</title>
</head>
<body>
    
<pre>
    <?php

    $a = [ 'tomas', 'ronaldo','rolannd','renne'];

    foreach($a AS $student){
        if($student === 'ronaldo') continue;
        if($student === 'rolannd') continue;
        

    }

    foreach($a AS $student){
        var_dump($student);

        if($student === 'rolannd') break;
       
    }
    ?>
</pre>
</body>
</html>