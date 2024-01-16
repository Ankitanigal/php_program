<!DOCTYPE html>
<html>
<body>

<?php
$x = 3; 
$y=70;

function myTest() {
$x = 5; 
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

function yourTest() {
   global $x ;
      echo "<p>Variable x inside function is: $x</p>";
}
    yourTest();
    
    echo "<p>Variable x outside function is: $x</p>";

function test(){
    $z=$GLOBALS['x'] + $GLOBALS['y'];
    echo"<p>addition is :$z<p>";
}
test();
?>

</body>
</html>
 