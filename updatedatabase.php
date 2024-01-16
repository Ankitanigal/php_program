<?php
include 'connection.php';
$id=$_GET['update']; 
$sql = "SELECT * FROM `user` WHERE `id`= $id";
$result=mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$name=$row['name'];
$last_name=$row['last_name'];
$email=$row['email'];
$mobile_number=$row['mobile_number'];

if(isset($_POST['submit']))
{
    $name =$_POST['name'];
    $last_name =$_POST['last_name'];
    $email= $_POST['email'];
    $mobile_number= $_POST['mobile_number'];

$sql= "UPDATE `user` SET `name` = '$name', `last_name` = '$last_name', `email` = '$email',`mobile_number` =`$mobile_number` WHERE `user`.`id` = $id";
$result=mysqli_query($conn, $sql);
if($result)
{
        echo "Recorde Updated !";
}
else
{
        echo "Recorde not updated !";
}
}
?>
<!DOCTYPE html> 
<html>
<body>
    <form>
        <div>
            <label><b>Name</b></label>
            <input type="text" placeholder="Enter name"name="name" value=<?php echo $name;?>><br><br>
        
            <label><b>Last Name</b></label>
            <input type="text" placeholder="Enter last_name" name="last_name" value=<?php echo $last_name;?>><br><br><br>

            <label><b>Email</b></label>
            <input type="email" placeholder="Enter email" name="email" value=<?php echo $email;?>><br><br>

            <label><b>Phone_number</b></label>
            <input type="text" placeholder="Enter Mobile_number" name="mobile_number" value=<?php echo $mobile_number;?>><br><br>

            <button type="submit">Update</button>
        </div>
    </form>
</body>
</html>
