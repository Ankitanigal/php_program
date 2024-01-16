<?php
$servrename = "localhost";
$username = "root";
$password ="";
$dbname ="demo1";
 
$conn = mysqli_connect($servrename,$username,$password,$dbname);

if(!$conn)
{
    die("connectiion failed:".mysqli_connect_error());
}
// echo "Connection successfully";