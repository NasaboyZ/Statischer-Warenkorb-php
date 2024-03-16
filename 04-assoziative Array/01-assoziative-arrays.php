<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assoziativ array</title>
</head>
<body>
    <?php
    $a = ['apple'=>'Apfel','orange' =>'Wasser'];

    // var_dump(array_keys($a));
    // var_dump(array_values($a));

    $a['birne'] = ['peach'];

    foreach($a AS $keys => $value){
        var_dump($keys);
        var_dump($value);
    }
    ?>
</body>
</html>