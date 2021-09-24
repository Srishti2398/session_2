<?php
$path = 'www.example.com/public_html/index.php';
$file = substr(strrchr($path, "/"), 1);
echo $file."\n"; 
?>
