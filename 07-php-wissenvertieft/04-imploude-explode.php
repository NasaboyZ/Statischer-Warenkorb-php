<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre><?php 
  
    $products = ['Orange', 'Notizbuch', 'Käse'];
      /*
    $s = ' ';

    foreach($products AS $products){
        $s = $s . $products . ',';
    }

    var_dump($s);

    */

    // var_dump(implode(', ', $products));

    $str = 'Lorem Impsum Hallo Welt';

    var_dump(explode(' ', $str));
    ?>

    </pre>
</body>
</html>