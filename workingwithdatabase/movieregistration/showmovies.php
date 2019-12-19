<?php 
require 'database.php';
?>
<html>
    <head>
        <title>Fetching Data from Database</title>
        <link rel ="stylesheet" href="tabledecorator.css" style="text/css">
    </head>
    <body>
        <table>
            <tr>
                <th>Movie Name</th>
                <th>Movie Genre</th>
                <th>Movie Release Year</th>
                <th>Movie Director</th>
            </tr>
            <?php 
            $sql = "SELECT * FROM movieregistration";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0)
            {
                while($row= mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>" . $row['Moviename'];
                    echo "<td>" . $row['Moviegenre'];
                    echo "<td>" . $row['Moviereleaseyear']; 
                    echo "<td>" .$row['Moviedirector'];
                    echo "</tr>";
                }
            }
            ?>
        </table>

    </body>
</html>