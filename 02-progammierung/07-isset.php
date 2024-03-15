<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if isset</title>
</head>
<body>
    <pre>
        <?php 
        $greeting = 'hallo';
        unset($greeting);
        if(isset($greeting)){
            echo $greeting. "\n";
        }
        
        
        
        ?>

    </pre>
</body>
</html>