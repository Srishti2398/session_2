<?php
$fruits = array("Banana", "Cherry", "Strawberry");
sort($fruits);
$clength = count($fruits);
for($x = 0; $x < $clength; $x++) {
  echo $fruits[$x];
  echo "<br>";
}
?>
