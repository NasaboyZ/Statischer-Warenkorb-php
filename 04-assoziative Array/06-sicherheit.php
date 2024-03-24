<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sicherheitsthema</title>
</head>
<body>
    <?php
    include 'länder/allow-list-citiys-for-form.php';
    ?>
    
    <form action="05-cross-seit-scripting.php" method="POST">
        <label for="city">Bitte wählen Sie die Stadt aus:</label>
        <select name="city" id="city">
            <?php foreach($cities as $key => $value): ?>
                <option value="<?php echo $key; ?>" <?php if(isset($_POST['city']) && $_POST['city']===$key) echo 'selected'; ?>><?php echo $value; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Abschicken!"/>
    </form>

    <hr/>
     
    <!-- allow list -->

    
    <?php 
    if(!empty($_POST) && isset($cities[$_POST['city']])) {
        include "text/{$_POST['city']}.html";
    }
    ?>
</body>
</html>
