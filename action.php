
<?php
include 'connection.php';
$name = $last_name = $img_upload = $email = $mobile_number = $subject = $marks = " ";
if(isset($_POST["name"]))
{
$name=$_POST["name"];
}
else{
    $name=null;
}

if(isset($_POST["last_name"]))
{
$last_name=$_POST["last_name"];
}
else{
    $last_name=null;
}
if(isset($_FILES["img_upload"]))
{
    // $img_upload=$_FILES["filetoupload"];
    // $imagename = time().".". pathinfo($_FILES['filetoupload']['name'], PATHINFO_EXTENSION);
    // $path = "images/".$imagename;
    // move_uploaded_file($imagename, $path);
 
    // $image  = time().".". pathinfo($_FILES['filetoupload']['name'], PATHINFO_EXTENSION);
    $filename=$_FILES["img_upload"]["name"];
    $tempname=$_FILES["img_upload"]["tmp_name"];
    $folder="images/".$filename;
    //echo $folder;
    echo "<img src='$folder' height='100px''width=100px'>";
    print_r(move_uploaded_file($tempname,$folder));
    $img_upload=$_FILES['img_upload']['name'];
}
else{
    $img_upload= null;
}

if(isset($_POST["email"]))
{
$email=$_POST["email"];
}
else{
    $email=null;
}

if(isset($_POST["mobile_number"]))
{
    $mobile_number=$_POST["mobile_number"];
}
else{
    $mobile_number=null;
}
if (isset($_POST["subject"]) && isset($_POST["marks"]))
{
    $subject = $_POST['subject'];
    $marks = $_POST['marks'];
    // var_dump($subject);
    // die;
if(is_array($subject) && is_array($marks))
{
    $subject=json_encode($subject);
    $marks=json_encode($marks);
    // var_dump($marks);
    // die;
}
}else
 {
    echo "failed";
 }
// if(isset($_POST["subject"]))
// {
// $subject=$_POST["subject"];
// }
// else{
//     $subject=null;
// }

// if(isset($_POST["marks"]))
// {
// $marks=$_POST["marks"];
// }
// else{
//     $marks=null;
// }

// print_r($name);
//  print_r($last_name);
//  print_r($img_upload);
//  print_r($email);
// print_r($mobile_number);
// INSERT INTO `user` (`id`, `name`, `last_name`, `img_upload`, `email`, `mobile_number`) 
// VALUES (NULL, 'ankitaaa', 'nigalll', 'ak.jpg', 'anki@gmail.com', '2145567');
// $sqlnew ="INSERT INTO `user` ( `name`, `last_name`,`img_upload`, `email`, `mobile_number`,`subject`,`marks`) 
// VALUES ('$name', '$last_name','$img_upload', '$email', '$mobile_number','$subject','$marks')";
$sqlnew ="INSERT INTO `user` (`name`, `last_name`, `img_upload`, `email`, `mobile_number`, `subject`, `marks`) 
VALUES ('$name', '$last_name', '$img_upload', '$email', '$mobile_number', '$subject', '$marks');";
//  echo $sqlnew;
$result =mysqli_query($conn, $sqlnew);
if($result)
 {
    echo "row inserted!" ;
    }
    else{
        echo "row is not inserted".mysqli_error($conn);
    }
    ?>

