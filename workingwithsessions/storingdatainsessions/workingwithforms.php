<?php
session_start();
if(isset($_POST['submit']))
{
    $_SESSION['fname'] = $_POST['firstname'];
    $_SESSION['lname'] = $_POST['lastname'];
    $_SESSION['phn'] = $_POST['phone'];
    $_SESSION['mail'] = $_POST['emailid'];
    $_SESSION['pass'] = $_POST['psw'];
    $_SESSION['gen'] = $_POST['sex'];
    $_SESSION['fac'] = $_POST['faculty'];
    header("Location:table.php");
    
}
?>
<html>
    <head>
        <title>Working With Forms</title>
        <style>
        </style>
    </head>
    <body>
        <h3>Form Fill Up</h3>
        <form method="POST">
            First Name
            <input type="text" name="firstname">
            <br>
            Last name
            <input type="text" name="lastname">
            <br>
            Phone Number
            <input type="text" name="phone">
            <br>
            Email
            <input type="email" name="emailid">
            <br>
            Password
            <input type="password" name="psw">
            <br>
            Gender
            <input type="radio" name="sex" value="male"/>Male
            <input type="radio" name="sex" value="female"/>Female
            <br>
            Faculty
            <select name="faculty">
                <option value="B.Sc.Cs.It">B.Sc.Cs.It</option>
                <option value="B.I.M">B.I.M</option>
                <option value="B.C.A">B.C.A</option>
            </select>
            <br>
            Please check the box if you like the given subjects
            <br>
            Front End Web Design
            <input type="checkbox" name="subjects" value="Front End Web Design">
            <br>
            Back End Web Design
            <input type="checkbox" name="subjects" value="Back End Web Design">
            <br>
            Network Administrators
            <input type="checkbox" name="subjects" value="Network Administrators">
            <br>
            Machine Learning Engineer
            <input type="checkbox" name="subjects" value="Machine Learning Engineer">
            <br>
            Data Scientist
            <input type="checkbox" name="subjects" value="Data Scientist">
            <br>
            Software Engineer
            <input type="checkbox" name="subjects" value="Software Engineer">
            <br>
            AI Engineer
            <input type="checkbox" name="subjects" value="AI Engineer">
            <br>
            Game Designeer
            <input type="checkbox" name="subjects" value="Game Designeer">
            <br>
            <input type="submit" name="submit" value="Submit">
        </form> 
    </body>
</html>