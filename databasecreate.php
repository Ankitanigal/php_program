<html>
<head>
    <style type="text/css">
    table{
        border:solid pink;
    }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    </head>
<body>
    <form action="./action.php" method="post" enctype="multipart/form-data">
        <div>
            <label><b>Name</b></label>
            <input type="text" placeholder="Enter name" name="name" required > <br><br>

            <label><b> Last Name</b></label>
            <input type="text" placeholder="Enter last name" name="last_name" required ><br><br>
             
            <label><b>Image upload</b></label>
           <input type="file" name="img_upload"><br><br>
            
           <label><b> Email</b></label>
            <input type="email" placeholder="Enter email" name="email" required ><br><br>
            
        <label><b> Mobilenumber</b></label>
          <input type="text" placeholder="Enter mobilenumber" name="mobile_number" required><br><br>
          
          <table id="tb">
        <tr>
            <th>Subject</th>
            <th>Marks</th>
            <th colspan="4">Action</th>
        </tr>
        <tr id="new">
           <td><input type="text" name="subject[]" required></td>
       <td><input type="text" name="marks[]" required></td>
       <!--<td><button type="button" id="addMore"  > + </button></td> -->
       <td><input class ="btn btn-warning" type="button" name="add" value="Add" id="append"></input></td>
       <td><input class ="btn btn-danger" type="button" name="remove" value="remove" id="remove"></input></td>
       <!-- <td><input class ="btn btn-warning" type="button" name="remove" value="remove" id="remove"></input></td> -->
       <!-- //<td><input class ="btn btn-warning" type="button" name="add" value="-" id="remove"></input></td> -->

  </tr>  
    </table><br><br>
            <button type="submit">Submit</button>
            <button type="submit"><a href="display.php">Display</a></button>
            <!-- <button type="Cancle"><a href="display.php">Cancle</a></button> -->  
        </div>
    </form>
<script>
    
     $(document).ready(function()
{  
//var aa='<tr><td><input type="text" name="subject[]" required></td><td><input type="text" name="marks[]" required</td><td><input class="btn btn-danger" type="buttan"  name="remove" value="Remove" id="remove"></input><td></tr>'; 
$("#append").click(function(){
    var clone=$("#new:last-child").clone(true);
    clone.find("input:text").val('');
        $("#tb").append(clone);
});
$("#tb").on("click","#remove",function(){
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
</body>
</html>