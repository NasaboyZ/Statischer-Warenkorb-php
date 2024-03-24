<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sicherheitsthema </title>
</head>
<body>
    <?php
    ?>
    
    <form action="05-cross-seit-scripting.php" method="POST">
        <label for= "city">Bitte wählen Sie die Stadt aus: </label>
        <select name="city" id="city">
            <option value="budapest" <?php if(!empty($_GET['city'])== 'budapest') echo 'selected' ?> >Budapest</option>
            <option value="helsinki" <?php if(!empty($_GET['city'])== 'helsinki') echo 'selected' ?>>Helsinki (finnland)</option>
            <option value="london" <?php if(!empty($_GET['city'])== 'london') echo 'selected' ?>>London (United Kindom)</option>
        </select>
        <input type ="Submit" value ="Abschicken!"/>
    </form>

    <hr/>
     
    <!-- allow list -->

    $cities =[
        'budapest',
        'helsinki',
        'london'
        ];
    <?php 
    if(!empty($_GET) && in_array($_GET['city'],$cities)){
    include "text/{$_GET['city']}.html";
    }
    ?>
</body>
</html>