

<?php
include 'connection.php';
// $name = $last_name =$img_upload = $email = $mobile_number =$subject =$marks= "";
if(isset($_POST['last_name'])) 
{
    $name = $_POST['name'];
    $last_name = $_POST['last_name']; 
    $img_upload=$_FILES['img_upload'];
    $email=$_POST['email'];
    $marks=$_POST['marks'];
    $subject=$_POST['subject'];
    $id = $_POST['id'];
//     $id = $_GET['id']; 
//     // $sql = "SELECT * FROM `user` WHERE `id`= $id";
//     // $result = mysqli_query($conn, $sql);
//     // $row = mysqli_fetch_assoc($result);

//     // $name = $row['name'];
//     // $last_name = $row['last_name'];
//     // $img_upload= $row['img_upload'];
//     // $email = $row['email'];
//     // $mobile_number = $row['mobile_number'];
//     $subject=json_decode($row['subject']);
//     $marks=json_decode($row['marks']); 

    if(isset($_POST['submit'])) 
{
   $name = $_POST['name'];
    $last_name = $_POST['last_name']; 
    $img_upload=$_FILES['img_upload'];
    $email=$_POST['email'];
    $marks=$_POST['marks'];
    $subject=$_POST['subject'];
    $id = $_POST['id'];
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
    
//         $email= $_POST['email'];
//         $mobile_number = $_POST['mobile_number'];
 {
    // $id=$_POST['id'];
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
        if(isset($_FILES["img_upload"]))
        {
            $filename = $_FILES["img_upload"] ["name"];
            $tempname = $_FILES["img_upload"] ["tmp_name"];
            $folder="images/".$filename;
            print_r(move_uploaded_file($tempname,$folder));
            $img_upload=$filename;
        }
        else
        {
            echo "Image Not Updated.";
        }
        $email = $_POST['email'];
        $mobile_number = $_POST['mobile_number'];
        $subject=json_encode($_POST['subject']);
        $marks=json_encode($_POST['marks']); 

        if (isset($_POST["subject"]) && isset($_POST["marks"]))
        {
            $subject = $_POST['subject'];
            $marks = $_POST['marks'];
        if(is_array($subject) && is_array($marks))
        {
          
            $subject=json_encode($_POST['subject']);
            $marks=json_encode($_POST['marks']); 
        }
        }else
         {
            echo "failed to upload ...!";
         }
 }
    //    $sql = "UPDATE `user` SET `name` = '$name', `lastName` = '$lastName', `email` = '$email'  WHERE `user`.`id` = $id";
        // $sqlnew = "UPDATE `user` SET `name` = '$name', `last_name` = '$last_name', 'img_upload'='img_upload',
        // `email` = '$email', `mobile_number` = '$mobile_number','subject'='$subject', 'marks'='$marks' WHERE `user`.`id` = $id";
// $sqlnew ="INSERT INTO `user` (`name`, `last_name`, `img_upload`, `email`, `mobile_number`, `subject`, `marks`) 
// VALUES ('$name', '$last_name', '$img_upload', '$email', '$mobile_number', '$subject', '$marks');";
// // $subject=json_encode($subject);
// $marks=json_encode($marks);
$sqlnew= "UPDATE 'user' SET 'name' = '$name', 'last_name' = '$last_name', 'img_upload'='img_upload','mobile_number' ='$mobile_number', 'subject' = '$subject', 'marks' = '$marks' WHERE 'user'.'id' = 'id'";

        $result = mysqli_query($conn, $sqlnew);

        if($result) 
        {
    //   print_r($result);
    //        die;
            echo "Record Updated in the database";
        } 
        else 
        {
            echo "Record not updated in the database";
        }
}
?>