<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formular mit Post</title>
</head>
<body>
    <pre>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            var_dump($_POST);
        }
        ?>
    </pre>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <input type="text" name="firstname" value="<?php echo isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : ''; ?>" />
        <input type="text" name="lastname" value="<?php echo isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : ''; ?>" />
        <input type="password" name="password" placeholder="Password" />
        <input type="checkbox" name="agb" value="1" <?php echo isset($_POST['agb']) && $_POST['agb'] == '1' ? 'checked' : ''; ?>>
        <input type="submit" value="Submit!" />
    </form>
</body>
</html>
