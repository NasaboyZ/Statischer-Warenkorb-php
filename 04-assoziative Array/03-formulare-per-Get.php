<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formular  mit Get</title>

</head>
<body>
    <pre>
        <?php
         var_dump($_GET);
          
        ?>
        <form action="03-formulare-per-Get.php" method = "GET">
            <input type= "text" name = "firstname" value="<?php if(!empty($_GET['firstname'])) echo $_GET['firstname'];?>"/>
            <input type= "text" name = "lastname" value="<?php if(!empty($_GET['lastname'])) echo $_GET['lastname'];?>"/>
            <input type= "submit" value="Submit!"/>
            
        </from>

    </pre>
    
</body>
</html>