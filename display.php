<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      table{
        border:2px solid pink;
      }
      th{
        border:2px solid pink;
      }
      td{
        border:2px solid pink;
      }
      </style>
  </head>
  <body>
<?php
include 'connection.php';
$sql ="SELECT * FROM `user`";
$result = mysqli_query($conn,$sql);
echo "<table>";
  echo "<tr><th> id </th> <th> name </th> <th> last_name </th>  <th> img_upload </th> 
  <th> email </th> <th> mobile_name </th><th colspan=2>  Action </th></tr>";
 while($row = mysqli_fetch_array($result ,MYSQLI_ASSOC))
  {
    echo "<tr><td>";
    echo $row['id'];
    echo"</td><td>";
    echo $row['name'];
    echo"</td><td>";
    echo $row['last_name'];
    echo"</td><td>";
   //echo $row['img_upload'];
   echo "<img src ='images /$row[img_upload]' height='50px' 'width=50'>";
    echo"</td><td>";
    echo $row['email'];
    echo"</td><td>";
    echo $row['mobile_number'];
    // echo"</td><td>";
    // echo $row['subject'];
    // echo"</td><td>";
    // echo $row['marks'];
    echo"<td><a href='Updateeee.php?id=$row[id]'>Update</td>";
    echo"<td><a href='delete.php?nm=$row[id]'>Delete</td>";
    //echo"<td><a href='upload.php?nm=$row[id]'>Upload</td>";
     echo"</td></tr>";

  }//,name=$row[name],lastname=$row[last_name],email=$row[email],mobile_number=$row[mobile_number]
  echo"</table>";

  ?>
    </body>
</html>