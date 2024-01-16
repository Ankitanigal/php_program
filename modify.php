<html>
<body>

<?php
//upper case
$x = "Hello World!";
echo strtoupper($x);
print"<br>";
//lower case
$x = "HELLO WORLD!";
echo strtolower($x);
print"<br>";
//string replace
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);
print"<br>";
//string reverse
$x = "Hello World!";
echo strrev($x);
print"<br>";
//removing whitespaces
$x = " Hello World! ";
echo trim($x);
print"<br>";
//convert string into array
$x = "Hello World!";
$y = explode(" ", $x);
print_r($y);
?> 

</body>
</html>