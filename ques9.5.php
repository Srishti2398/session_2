<?php
$emp = array("R"=>"35", "B"=>"37", "C"=>"43");
arsort($emp);

foreach($emp as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
