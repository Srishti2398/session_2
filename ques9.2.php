<?php
$fruits = array("Banana", "Cherry", "Strawberry");
rsort($fruits);
$clength = count($fruits);
for($x = 0; $x < $clength; $x++) {
  echo $fruits[$x];
  echo "<br>";
}
?>
