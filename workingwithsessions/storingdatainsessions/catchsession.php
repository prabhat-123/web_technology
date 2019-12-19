<?php
session_start();
$user = $_SESSION['user'];
?>
<html>
<head>
<title>Catching sessiondata</title>
</head>
<body>
<h1><?php echo $user; ?> </h1>
</body>
</html>