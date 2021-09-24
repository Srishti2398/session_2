<?php
/*$txt = "Hello folks,This is php buit "; 
$myfile = file_put_contents('movies.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);*/

  
$fp = fopen('movies.txt', 'a');//opens file in append mode  
fwrite($fp, ' this is additional text ');  
fwrite($fp, 'appending data');  
fclose($fp);  
  
echo "File appended successfully";  

?>
