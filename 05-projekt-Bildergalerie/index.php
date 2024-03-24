<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/gallery.css">
    <link rel="stylesheet" type="text/css" href="./styles/simple.css">
    <title>Bildergallerie</title>
</head>
<body>

    <main>
        <?php
        include './inc/data.php';
        ?>
        <div class="gallery-container">
            <?php foreach($imageTitles AS $imageSrc => $imageTitle):?>
                <a class="gallery-item" href="image.php?image=<?php echo http_build_query(['image'=>$imageSrc]);?>">
                    <h4><?php echo $imageTitle;?></h4>
                    <img src="images/<?php echo $imageSrc;?>"/>
                </a>
            
                <?php endforeach ;?>
        </div>
    </main>
</body>
</html>