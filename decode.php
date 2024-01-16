
<!DOCTYPE html>
<html>
<body>
<?php
$age = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($age);
echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;
?>

</body>
</html>


