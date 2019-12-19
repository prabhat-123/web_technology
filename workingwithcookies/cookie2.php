<!DOCTYPE html>
<?php
setcookie("studentname","Prabhat_Ale",time()+86400*30,'/');
?>
<html>
    <head>
        <title>WOrking on cookies part two</title>
    <head>
    <body>
        <?php
        if(isset($_COOKIE['studentname']))
        {
            echo "Cookie is set";
            echo "The value of cookie is" .$_COOKIE['studentname'];
        }
        ?>
    </body>
</html>