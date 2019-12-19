<?php
session_start();
if(isset($_POST['submit']))
{   
    echo session_id();

}

?>
<html>
    <head>
        <title>Knowing Session Id</title>
    </head>
    <body>
        <form method="POST">
            Name
            <input type="text" name="name">
            <br>
            Username
            <input type="text" name="uname">
            <br>
            <input type="submit" value="Save" name="submit">

        </form>
    </body>