<?php
function password_generate($char) 
{
  $str = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($str), 0, $char);
}
  echo password_generate(7)."\n";
?>
