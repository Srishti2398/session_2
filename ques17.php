<?php
$original_string = 'The brown fox';
$string_insert ='quick';
$pos = 4;
$new_string = substr_replace($original_string, $string_insert.' ', $pos, 0);
echo $new_string."\n";
?>
