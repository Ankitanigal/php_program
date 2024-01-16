<html>
    <head>
    <style type="text/css">
        table{
            border:solid pink;
        }
        </style>
<head>
<body>

    <form action=" " method="post">
     <table id="studtable">
    <tr>
        <th>Subject</th>
        <th>Marks</th>
        <th colspan="4">action</th>
       </tr>
       <tr>
       <td><input type="text" name="subject[]"></td>
       <td><input type="text" name="marks[]"></td>
       <td><button type="button" onclick="addROw()"> + </button></td>
       <td><button type="button" onclick="removeROw()"> - </button></td>
       <td><button type="submit">submit</button></td>
</tr>
</table>
    </form>
</body>
</head>
</html>