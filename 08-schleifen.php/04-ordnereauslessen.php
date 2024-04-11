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
        /*
        $handle = opendir(__DIR__.'/img');
        $filename = readdir($handle); // reads directory ist es im ordner oddre nicht
        var_dump($filename);*/

        $handle = opendir(__DIR__.'/img');

        // Hole mir bitte mei aktiellen dateiname wenn mein filename falsch ist brich ab wenn es mit einen . anfängt überspringe  sonst gib aus die datei
        while(true){
            $filename = readdir($handle);
            if($filename === false) break;
            if(str_starts_with($filename, '.')) continue;
            var_dump($filename);
        }
        ?>
</pre>
</body>
</html>