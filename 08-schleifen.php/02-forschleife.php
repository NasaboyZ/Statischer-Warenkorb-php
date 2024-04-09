<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while schleife</title>
</head>
<body>
    <pre>
        <?php
        for($x= 0; $x <=5; $x++){
            var_dump($x);

        }

        echo "---\n";

        for($josef = 0; $josef <=10; $josef +=2){ // die schreibweise += ist eine kur schreib weisse von variabel= variable+2 
            // eine zahl zu Überspringen können wir mit continue
            if($josef === 4){
                continue;
            }
            
            var_dump($josef);

        }

        echo "---\n";

            // for($x= 10; $x >=0; $x++){  //achtung ist eine entlos schleiffe wenn es so ausgeführt wird 
            //     var_dump($x);

            // }
            for($x= 10; $x >=0; $x--){
                var_dump($x);
    
            }
        ?>
</pre>
</body>
</html>