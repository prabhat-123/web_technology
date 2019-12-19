<!DOCTYPE html>
<?php
    $cookie_name ="semester";
    $cookie_value = "Sixth";
    setcookie($cookie_name,$cookie_value,time()+86400*30,'/');
?>
<html>
    <head>
        <title>Working With Php cookies</title>
    </head>
    <body>
        <?php
        if(!isset($_COOKIE[$cookie_name]))
        {
            echo "Cookie named" . $cookie_name . "is not set";
        }
        else
        {
            echo "Cookie named" . $cookie_name . "is set";
            echo "Cookie value is" . $_COOKIE[$cookie_name] ;

        }
        ?>
    </body>
</html>