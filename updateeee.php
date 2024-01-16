<?php
include 'connection.php';
$name = $last_name =$img_upload = $email = $mobile_number =$subject =$marks= "";
if(isset($_GET['id'])) 
{
    $id = $_GET['id']; 
    $sql = "SELECT * FROM `user` WHERE `id`= $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $name = $row['name'];
    $last_name = $row['last_name'];
    $img_upload= $row['img_upload'];
    $email = $row['email'];
    $mobile_number = $row['mobile_number'];
    $subject=json_decode($row['subject']);
    $marks=json_decode($row['marks']); 
//     if(isset($_POST['submit'])) 
//     {
//         $name = $_POST['name'];
//         $last_name = $_POST['last_name']; 
//     if(isset($_POST['img_upload']))
//     {
//         $filename=$_FILES["img_upload"]["name"];
//         $tempname=$_FILES["img_upload"]["tmp_name"];
//         $folder="images/".$filename;
//         echo $folder;
//         echo "<img src='$folder' height='100px''width=100px'>";
//         print_r(move_uploaded_file($tempname,$folder));
//         $img_upload=$_FILES['img_upload']['name'];
//     }
// }
    }
    

?>
<!DOCTYPE html>
<html>
  <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script>
    $('#append').click(function()
{
    console.error('innn');
    var clone=$("#new:last-child").clone(true);
    clone.find("input:text").val('');
        $("#tb").append(clone);
});
$(document).ready(function()
{  

$("#tb").on("click","#remove",function()
{
    if($("#tb #new").length > 1 )
    {
        $(this).closest("#new:last-child").remove();
    }
    else
    {
        alert("Sorry You can't remove !");
    }
});
});
</script>
  </head>
<body>
    <form method="post" action="updatesave.php" enctype="multipart/form-data">
        <div>
            <label><b>Name</b></label>
            <input type="text" placeholder="Enter name" name="name" value="<?php echo $name; ?>"><br><br>
        
            <label><b>Last Name</b></label>
            <input type="text" placeholder="Enter last name" name="last_name" value="<?php echo $last_name; ?>"><br><br>
           
            <label><b>Image upload</b></label>
           <input type="file" name="img_upload" style="width: 15%"> <br><br>
           <img src='images/<?php echo $img_upload?>' height='150px' width='150'><br><br>
            <label><b>Email</b></label>
            <input type="email" placeholder="Enter email" name="email" value="<?php echo $email; ?>"><br><br>

            <label><b>Mobile Number</b></label>
            <input type="text" placeholder="Enter Mobile Number" name="mobile_number" value="<?php echo $mobile_number; ?>"><br><br>
         
          
            
            <table id="tb">
        <tr>
            <th>Subject</th>
            <th>Marks</th>
            <th colspan="4">Action</th>
        </tr>
        <?php
        foreach($subject as $key=> $row){
        ?>
      <?php $subject=array($subject);foreach($subject as $tb) ?> 
        <tr id="tb">
           <td><input type="text" name="subject[]"  value="<?php echo $row; ?>" required></td>
       <td><input type="text" name="marks[]" value="<?php echo $marks[$key]; ?>" required></td>
       
       <td><input class ="btn btn-warning" type="button" name="add " value="Add " id="append"></input></td>
       <td><input class ="btn btn-danger" type="button" name="remove" value="Remove" id="remove"></input></td>
  </tr>  
 
        <?php
        }
        ?>
    </table><br><br>
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <button type="submit" name="submit">Update</button> 
            <!-- <label><b>Subject</b></label>
            <input type="text" placeholder="Enter subject" name="subject" value="<?php echo $subject; ?>"><br><br>

            <label><b>Marks</b></label>
            <input type="text" placeholder="Enter marks" name="marks" value="<?php echo $marks; ?>"><br><br> -->
            <!-- <button type="submit" name="submit">Update</button> -->
        </div>
</form>

</body>

</html>
        