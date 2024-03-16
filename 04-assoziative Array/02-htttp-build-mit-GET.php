<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>die $GET function </title>
</head>
<body>
    <pre><?php
    var_dump($_GET);

    $query = http_build_query(['name'=> 'Max & Moritz']);

    var_dump($query);
    
    ?></pre>
    
</body>
</html>