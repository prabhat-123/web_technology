<?php
session_start();
if(isset($_POST['save']))
{
    $_SESSION['user'] = $_POST['username'];
    header("Location: catchsession.php");
}

?>


<html>
<head>
<title>Working with sessions</title>
</head>
<body>
<form method="POST">
<label>Username</label>
<input type="text" placeholder="Enter your username" name="username">
<br>
<label>First Name</label>
<input type="text" placeholder="Enter your first name" name="firstname">
<br>
<label>Last Name</label>
<input type="text" placeholder="Enter your last name" name="lastname">
<br>
<label>Password</label>
<input type="password" placeholder="Enter your password" name="password">
<br>
<input type="submit" value="Register" name="save">
</form>
</body>
</html>