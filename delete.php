<html>
    <body>
<?php
include 'connection.php';
$id=$_GET['nm'];
$sql= "DELETE FROM user WHERE `USER`.`id`=$id ";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo "record is deleted successfully!";

?>
<META HTTP-EQUIV="Refresh" CONTENT ="0; URL=http://localhost/php_programs/display.php">
<?php
}
else{
    echo "record is not deleted!";
}
?>
</body>
</html>