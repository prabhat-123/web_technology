<?php
include 'db.php';
if (isset($_POST['save']))
{
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $cty = $_POST['city'];
  $gen = $_POST['gender'];
  $mail = $_POST['email'];
  $psw = $_POST['password'];
  $cpsw = $_POST['confirmpassword'];
  if($psw==$cpsw)
  {
    $sql = "INSERT INTO userregistration(Firstname,Lastname,City,Gender,Email,Password)
    VALUES('$fname','$lname','$cty','$gen','$mail','$psw')";
    if (mysqli_query($conn,$sql))
    {
      echo "New User registered successfully";
    }
    else
    {
      echo "Database connection lost";
     
    }
  }
  else
  {
    echo "Passwords donot match";
  }
  }
?> 

<html>
<head>
<title>Web Forms</title>
</head>
<body>
<form method = "POST">
<label>First Name</label>
<input type= "text" placeholder="First Name" name="firstname" required>
<br>
<label>Last Name</label>
<input type="text" placeholder="Last Name" name="lastname" required>
<br>
<label>City</label>
<input type="text" placeholder="Enter your City" name="city" required>
<br>
<label>Gender</label>
<select name="gender">
<option value="male">Male</option>
<option value="female">Female<option>
</select>
<br>
<label>Email</label>
<input type="email" placeholder="Enter your email here" name="email" required>
<br>
<label>Password</label>
<input type="password" placeholder="Enter your password here" name="password" required>
<br>
<lable>Confirm Password</label>
<input type="password" placeholder="Retype your password" name="confirmpassword" requird>
<br>
<input type="submit" value="Register" name="save">
</form>
<br>
<a href="studenttable.php">Student Details</a>
</body>
</html>

