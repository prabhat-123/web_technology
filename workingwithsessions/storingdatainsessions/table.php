<?php
session_start();
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$phn = $_SESSION['phn'];
$mail = $_SESSION['mail'];
$pass = $_SESSION['pass'];
$gen = $_SESSION['gen'];
$fac = $_SESSION['fac'];
?>

<html>
    <head>
        <title>Displaying Form Data Using Post Method</title>
        <style>
            table,th,td
            {
                border: 1px solid black;
                border-collapse: collapse;
                background-color: aqua;
            }
            th,td
            {
                padding:10px;
                text-align:left;

            }
            </style>
    </head>
    <body>
        <table style="width:100%">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Faculty</th>
            </tr>
            <tr>
                <td><?php echo $fname; ?></td>
                <td><?php echo $lname; ?></td>
                <td><?php echo $phn; ?></td>
                <td><?php echo $mail; ?></td>
                <td><?php echo $gen; ?></td>
                <td><?php echo $fac; ?></td>
            </tr>
        </table>
    </body>
</html>