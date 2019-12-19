<!Doctype html>
<html>
<head>
<title>Working with file handling problem</title>
</head>
<body>
<?php
$opened_file = fopen('filehandle.txt','r');
//reading a first line in php
echo fgets($opened_file);
//closing a file
fclose($opened_file);
?>
</body>
</html>