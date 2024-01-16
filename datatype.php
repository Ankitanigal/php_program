<html>
<body>

<?php
//float
$x = 10.365;
var_dump($x);
echo"<br>";
//boolen
$x = true;
var_dump($x);
echo"<br>";
//Array
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo"<br>";
//null
$x = "Hello world!";
$x = null;
var_dump($x);
echo "<br>"; 
//integer
$x = 5985;
var_dump($x);
echo"<br>";
//change value
$x = 5;
var_dump($x);
echo "<br>";

$x = "Hello";
var_dump($x);
echo "<br>";

 $x = "true";
var_dump($x);
echo "<br>"; 
//object
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("red", "Volvo");
  var_dump($myCar);
//string
$x = "Hello world!";
$y = 'Hello world!';
var_dump($x);
echo "<br>"; 
var_dump($y);
echo"<br>";
$x = 5;
var_dump($x);
?>

</body>
</html>
