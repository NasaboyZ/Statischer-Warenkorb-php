<?php
require_once './inc/all.php';
$galleryImageRepository = new GalleryImagRepository();
$images = $galleryImageRepository -> fetchAll();
var_dump($images);

render('./views/index.view.php', [
    'images' => $images
]);
