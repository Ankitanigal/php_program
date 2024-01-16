
<?php
include 'connection.php';
$name= $last_name= $email= $mobile_number="";
if(isset($_GET['id']))
{
$id=$_GET['id'];
$sql="SELECT * FROM 'USER' WHERE 'id'=$id";
$result= mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name= $row['name'];
$last_name= $row['last_name'];
 $email= $row['email'];
 $mobile_number= $row['mobile_number'];
if(isset($_POST['submit']))
{
    $name =$_POST['name'];
    $last =$_POST['last_name'];
    $email =$_POST['email'];
    $mobile_number =$_POST['mobile_number'];
$sql= "UPDATE 'user' SET 'name' = '$name', 'last_name' = '$last_name', 'email' = '$email',
 'mobile_number' ='$mobile_number' WHERE 'user'.'i' ='$id'";
 $result = mysqli_query($conn,$sql);
if($result)
{
    echo "record is updated successfully!";
}
else{
    echo "record is not updated!";
}
}
}
?>
 <html>
  <body>
 <form method="POST">
        <div>
            <label><b>Name</b></label>
            <input type="text" placeholder="Enter name"  name="name" value=<?php echo $name;?>> <br><br>

            <label ><b>Last name</b></label>
            <input type="text" placeholder="Enter lastname" name="last_name" value=<?php echo $last_name;?>> <br>
           
            <br> <label><b> Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" value=<?php echo $email;?>> <br><br>

            <label><b> Mobilenumber</b></label>
            <input type="text" placeholder="Enter Mobilenumber" name="mobile_number" value=<?php echo $mobile_number;?>> <br><br>
         
            <button type="submit" name='submit'>update</button>
        </div>
 </form>
</body>
</html>
 

