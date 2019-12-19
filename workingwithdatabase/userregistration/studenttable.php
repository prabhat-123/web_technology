<?php
include 'db.php';
?>
<html>
    <head>
        <title>Student Table</title>
        
    </head>
    <body>
        <table>
            <tr>
                <th>Student Name</th>
                <th>Gender</th>
                <th>City</th>
                <th>Email</th>
            </tr>
            <?php 
            $sql = "SELECT Firstname,Lastname,City,Gender,Email FROM userregistration";
            $result = mysqli_query($conn,$sql);
            if ($result->num_rows >0)
            {
                while($row=mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>" . $row['Firstname'] . " " . $row['Lastname'];
                    echo "<td>" . $row['City'];
                    echo "<td>" . $row['Gender'];
                    echo "<td>" .$row['Email'];
                    echo "</tr>";
                }
            }
            else
            {
                echo "Data is not fetched from the database";
            }
            ?>
        </table>
    </body>
</html>