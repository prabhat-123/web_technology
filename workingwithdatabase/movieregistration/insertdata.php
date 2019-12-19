<?php
include 'database.php';
if(isset($_POST['save']))
{
    $moviename = $_POST['movie_name'];
    $moviegenre = $_POST['movie_genre'];
    $moviedirector = $_POST['movie_director'];
    $moviereleaseyear = $_POST['movie_releaseyear'];
    $sql = "INSERT INTO movieregistration(Moviename,Moviegenre,Moviedirector,Moviereleaseyear)
    VALUES('$moviename','$moviegenre','$moviedirector','$moviereleaseyear')";
    if(mysqli_query($conn,$sql))
    {
        echo "New movie added successfully";
    }
    else
    {
        echo "Error establishing the connection";
    }
}
?>
<html>
<head>
<title>Inserting Data Into DB</title>
</head>
<body>
<form method="POST">
<label>Movie Name</label>
<br>
<input type="text" placeholder="Enter movie name" name="movie_name">
<br>
<label>Movie Genre</label>
<br>
<input type="text" placeholder="Enter movie genre" name="movie_genre">
<br>
<label>Movie Director</label>
<br>
<input type="text" placeholder="Enter movie director name" name="movie_director">
<br>
<label>Movie Release Year</label>
<br>
<input type="date"  name="movie_releaseyear">
<br>
<input type="submit" value="Insert" name="save">


