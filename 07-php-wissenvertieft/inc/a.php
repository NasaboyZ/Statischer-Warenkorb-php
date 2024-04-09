<?php
echo "ich bin die a.php\n";
include __DIR__.'/b.php';
var_dump(DIRECTORY_SEPARATOR);
var_dump (__FILE__); // kommpleter pfad der php
var_dump (dirname(__FILE__)); // kommpleter pfad der php plus oderner
?> 