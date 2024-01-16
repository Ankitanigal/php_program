
<?php
include 'Database.php';
$name = $lastName =$profileImage =$email =$subject =$marks ="";
if(isset($_GET['id']))
{
$id=$_GET['id'];
$sql = "SELECT* FROM `user` WHERE `id`= $id";
$result = $conn->query($sql);
$row=mysqli_fetch_assoc($result);
// print_r($row);
// die();
$name=$row['name'];
$lastName=$row['lastName'];
$profileImage=$row['profileImage'];
$email=$row['email'];
$subject=$row['subject'];
$mark=$row['marks'];
$subjects = json_decode($subject);
$marks = json_decode($mark);
// var_dump($subject);
// die();
}

// if(isset($_POST['submit']))
// {
//     $name = $_POST['name'];
//     $lastName = $_POST['lastName'];
//     if(isset($_FILES["uploadfile"]))
// {
//     $filename = $_FILES["uploadfile"] ["name"];
//     $tempname = $_FILES["uploadfile"] ["tmp_name"];
//     $folder = "userimg/".$filename;
//     move_uploaded_file($tempname,$folder);
//     $profileImage=$filename; 
// }
// else
// {
//     echo "Image Not Updated.";
// }
//     $email = $_POST['email'];

//     $sql = "UPDATE `user` SET `name` = '$name', `lastName` = '$lastName', `profileImage` = '$profileImage', `email` = '$email' WHERE `user`.`id` = $id";
//     $result = $conn->query($sql);
//     if($result)
// {
//     echo "Record Updated succesfully";
// }else
// {
//     echo "Record not Updated";
// }
// }

?>
<!DOCTYPE html>
<html>
<body>
<h2> Please Update your details</h2>
<form action="testing.php" method="POST" enctype="multipart/form-data">
    <div>
    <lable>Name</lable>
    <input type="text" placeholder="Enter your name" name="name" required value=<?php echo $name;?>><br></br>
    
    <lable>Last Name </lable>
    <input type="text" placeholder="Enter your lastName" name="lastName" required value=<?php echo $lastName;?>><br></br>
   
    <!-- <img src="userimg" alt=""> -->
    <!-- <img src = 'userimg/$row[profileImage]' height = '200px' width='200px'>"; -->
    <lable>Profile Image</lable>
    <input type="file" name="profileImage" <?php echo $profileImage;?>><br></br>
    <div>
    <img src='userimg/<?php echo $profileImage ;?>' height = '100px' width='100pxpx';><br></br>
    </div>

    <lable>Email </lable>
    <input type="email" placeholder="Enter youur email" name="email" value=<?php echo $email;?>><br></br>
    
    <head>
    <style type= "text/css">
            table{
                border: 2px solid black;
            }
        </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <!-- <form action="" method="post"> -->
         <table id="table">
            <tr>
                <th> Subject </th> 
                <th> Marks </th>
                <th colspan="4">Action</th>
            </tr>
            <?php
            foreach($subjects as $key=>$row){ 
            ?>
            <tr id=x>
                <td>    
                    <input type="text" name="subject[]" value = "<?php  echo $row ?>"></td>
                    <td><input type="text" name="marks[]" value = "<?php  echo $marks[$key] ?>"></td>
                    <!-- <td><input class="btn btn-danger" type="button" name="Add" value="Add" id="Add"></input></td> -->
                <td><input class="btn btn-danger Remove" type="button" name="Remove" value="Remove" id="Remove"></input></td>
                <td><input class="btn btn-danger" type="button" name="Add" value="Add" id="Add"></input></td>

            </td>
            </tr>
            <?php
            }
            ?>

            <!-- <tr id=x>                
                <td><input type="text" name="subject[]"><?php foreach($subjects as $x) echo $x ?></td>
                <td><input type="text" name="marks[]"><?php foreach($marks as $x) echo $x ?></td>
            
                <td><input class="btn btn-danger" type="button" name="Add" value="Add" id="Add"></input></td>
                <td><input class="btn btn-danger" type="button" name="Remove" value="Remove" id="Remove"></input></td>
            </tr> -->
         </table><br></br>
         <!-- <td><button id="btn"> Submit </button>
         <button type="Display"><a href ="table.php">Displa</a>y</button> -->

    </form>
    </body>
</html>
<script>
        $(document).ready(function(){
            $("#Add").click(function(){

                // $("#this").empty(function(){

                // });

            var clone=$("#x:last-child").clone(true);
            clone.find("input:text").val("");
            $("#table").append(clone);
        });
        $(".Remove").click(function()
        {
            // $('#x:last-child').remove();
            if($(".Remove","#x").length>=1){
                $(this).closest('#x').remove();
            }else
            {
                alert("cannot remove last row");
            }
        });
    });
    </script>    
    <!-- <label>Subject</lable>
    <input type="subject" placeholder="Enter Subject name" name="subject" value=<?php echo $subject;?>><br></br>

    <lable>Marks</lable>
    <input type="marks" placeholder="Enter your marks" name="marks" value=<?php echo $marks;?>><br></br> -->

    <input type="hidden" name="id" value=<?php echo $id ;?>>
    <button type="submit" name= "submit" >Submit</button>
    <!-- <input type ="submit" name="Update_btn" value= "Update"> -->
    <button><a href="table.php">Back</a></button>
    </div>
</body>
</html>
<head>
<!-- <script>
        $(document).ready(function(){
            $("#Add").click(function(){

                // $("#this").empty(function(){

                // });

            var clone=$("#x:last-child").clone(true);
            clone.find("input:text").val("");
            $("#table").append(clone);
        });
        $("#Remove").click(function()
        {
            // $('#x:last-child').remove();
            if($("#Remove","#x").length>=1){
                $(this).closest('#x').remove();

            }else
            {
                alert("cannot remove last row");
            }
        });
    });
    </script>  
        </head> -->
updatedbform.php
Displaying updatedbform.php.