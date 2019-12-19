<?php
session_start();
if(isset($_POST['submit']))
{
    $_SESSION['photo'] = $_POST['']
}


?>
<html>
    <head>
        <title>Image Upload Form</title>
    </head>
    <body>
        <h1>Upload Image</h1>
        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="pic" accept="image/">
            <br>
            <input type="submit" name="submit" value="Upload">
        </form>
    </body>
</html>