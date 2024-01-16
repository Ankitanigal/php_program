<?php
include 'Database.php';
if($_POST['lastName'])
{
    $name=$_POST['name'];
    $lastName=$_POST['lastName'];
    $profileImage=$_FILES['profileImage'];
    // print_r($profileImage);
    // die();
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $marks=$_POST['marks'];
    // var_dump($marks);
    // die();
    $id=$_POST['id'];

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
            if(isset($_FILES["profileImage"]))
            {
                $filename = $_FILES["profileImage"] ["name"];
                $tempname = $_FILES["profileImage"] ["tmp_name"];
                $folder = "userimg/".$filename;
                move_uploaded_file($tempname,$folder);
                $profileImage=$filename;
            //  $profileImage=$_FILES['uploadfile']['name']; 
            //  print_r($_filename);
            //  die();
            }
            else
            {
                echo "Image Not Updated.";
            }
            if (isset($_POST["subject"]) && isset($_POST["marks"]))
            {
                // $subject = $_POST['subject'];
                // $marks = $_POST['marks'];
                    // var_dump($subject);
                    // die();
                // if (is_array($subject) && is_array($marks))
                // {
                    $encodedsubject = json_encode($subject);
                    $encodedmarks = json_encode($marks);
                    // var_dump($marks);
                    // die();
                // }
            }else
            {
                echo "Unsucessfull";
            }
        $email = $_POST['email'];
        $sql= "UPDATE `user` SET `name` = '$name', `lastName` = '$lastName', `profileImage` = '$profileImage', `email` = '$email',`subject` = '$encodedsubject', `marks` = '$encodedmarks' WHERE `user`.`id` = $id";
        // $sql = "UPDATE `user` SET `name` = '$name', `lastName` = '$lastName', `profileImage` = '$profileImage', `email` = '$email' WHERE `user`.`id` = $id";
        // print_r($sql);
        // die();
        // var_dump($sql);
        // die();
        $result = $conn->query($sql);
        if($result)
{
    echo "Record Updated succesfully" ;    
}else
{
    echo "Record not Updated";
}
}echo "<br></br>";     
}
?>
    <button><a href="table.php">Back</a></button>