
<?php if(!empty($images)): ?>

<div class="image-gallery">
    <?php foreach($images AS $image):?>
        <figure class="image-gallery-item">
                <img class="image-gallery-image" src="./images/<?php echo $image ->src; ?>" />
                <figcaption><?php echo e($image -> title); ?></figcaption>
            </figure>

        <?php endforeach; ?>
          
    

<?php else: ?>
    <p>Eswurden keine Bilder erfasst.</p>
<?php endif;?>