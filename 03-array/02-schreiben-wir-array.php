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



    var_dump($a);
    var_dump(in_array('Max Mustermann',$a));

    if(in_array('max Mustermann',$a)){
        echo "Max Mustermann ist in der Liste";
    }


    if( !in_array('max Mustermann',$a)){
        echo "Max Mustermann ist nicht in der Liste \n";
    }
    ?>
</pre>
</body>
</html>