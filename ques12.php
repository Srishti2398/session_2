<?php
echo "<pre>";
$dir = "/var/www/html/session_2";
// Sort in descending order
$a = scandir($dir,1);


print_r($a);
?>
