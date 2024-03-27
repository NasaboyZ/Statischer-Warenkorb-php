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
         $arr=[
             ['title'=>'budapest', 'content'=>'Budapest ost die Hauptstadt von ungarn.'],
             ['title'=>'Helsinki', 'content'=>'Helsinki ist die Hauptstad von Finnland.'],
             ['title'=>'Stockholm', 'content'=>'Stockholm ist die Hauptstad von Schweden.']
         ];
         print_r($arr);
         foreach($arr AS $key => $value){
            print_r($value);
         }

        ?>

        <?php foreach($arr AS $value):?>
            <h3><?php echo $value['title'];?></h3>
            <p><?php echo $value['content'];?></p>
            <?php endforeach;?>
           
    </pre>
</body>
</html>