<!DOCTYPE html>
<html>
<body>

<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
}
?>

</body>
</html>