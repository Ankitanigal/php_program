<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("2nd.php", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>

</body>