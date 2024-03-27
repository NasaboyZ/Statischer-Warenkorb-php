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
         var_dump('Berlin'[-1]);
         $arr=[
            'Budapest',
            'Berlin',
            'Sofia',
            'Athen',
            'Madrid'
         ];
         var_dump($arr[1][0]);
       ?>
       <ul>
        <?php foreach($arr AS $city):?>
            <?php if($city[0]=== 'B'):?>
                 <li><?php echo $city;?></li>
                <?php endif ; ?>
            <?php endforeach ?>
        </ul>

        <?php
        $filtered = [];
        foreach($arr AS $city){
            if($city [0] === 'B'){
                $filtered []= $city;
            }
        }
        var_dump($filtered);


        ?>
              <?php if(!empty($filtered)) :?>
                <ul>
                    <?php foreach($filtered As $city):?>
                        <li><?php echo $city;?></li>
                        <?php endforeach;?>
              </ul>
                <?php endif;?>
    </pre>
</body>
</html>