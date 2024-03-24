<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image-gallerie</title>
</head>
<body>
    <?php 
    include './inc/data.php';
    include './inc/functions.php';

    // Sanitize and validate the image URL
    $imageUrl = isset($_GET['image']) ? basename($_GET['image']) : ''; // Ensure only the filename is kept

    ?>

    <?php if(!empty($imageTitles[$imageUrl])):?>
        <h2><?php echo $imageTitles[$imageUrl];?></h2>
        <?php if(!empty($imageDescs[$imageUrl])):?>
            <p><?php echo $imageDescs[$imageUrl];?></p>
        <?php endif;?>
        <img src="images/<?php echo $imageUrl;?>" alt="<?php echo $imageTitles[$imageUrl]; ?>"/>
    <?php else: ?>
        <p>No image found.</p>
    <?php endif;?>

</body>
</html>
