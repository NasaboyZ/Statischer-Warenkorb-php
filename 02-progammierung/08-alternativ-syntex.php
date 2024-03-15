<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $pageTitle = 'Urlaubsberichte';
    $bgColor = 'red';
    ?>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, voluptate ipsam? Non dignissimos accusantium exercitationem ex unde voluptates dolorem, eligendi aliquam odit. Vitae eius tenetur dicta harum nihil voluptate ipsa.</p>
    <?php if(!empty($pageTitle)): ?>
        <h2><?php echo $pageTitle ; ?></h2>
   <?php endif; ?>

   <p<?php if(!empty($bgColor));?>style = "backgorund-color":<?php echo $bgColor;?>;"<? endif;?>>lroem Ipsum ....</p>
</body>
</html>