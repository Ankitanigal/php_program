<html>
    <body>
        <form>
            Name: <input type="text" name="name" required pattern="[A-Za-z\s'-]+">
            <span>*</span>
            <br><br>
            Email: <input type="text" name="name" required pattern="^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$">
            <span>*</span>
            <br><br>
            Website:<input type="text" name="name" required pattern="https?://.+">
            <span>*</span>
            <br><br>
            comment:<textarea name="comment" rows="1" cols="40"></textarea>
            <br><br>
               
    <h1>select to upload:</h1>
    <span>*</span>
        <input type="file" name="filetoupload"><br><br>
        <span>*</span>
        <input type="file" name="Image/*" namne="submit">
        <br><br>
            Gender:
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other
            <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" name="submit" value="submit">

  
        </form>
    </body>
</html>