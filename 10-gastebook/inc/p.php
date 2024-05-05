<?php
$paragraphs = explode("\n", $content);
$filteredParagraphs =[];
foreach ($paragraphs as $paragraph) {
    $paragraph = trim($paragraph);
    if (strlen($paragraph) > 0) {
        $filteredParagraphs[] = $paragraph;
    }
}
?>
<?php foreach($filteredParagraphs AS $paragraph): ?>
    <p><?php echo e(p);?></p>
<?php endforeach;?>