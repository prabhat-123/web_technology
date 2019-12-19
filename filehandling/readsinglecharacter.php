<!Doctype html>
<html>
<head>
<title>Working with file handling problem</title>
</head>
<body>
<?php
$opened_file = fopen('filehandle.txt','r');
//read a single(first) character in a line
echo fgetc($opened_file);
//close a file
fclose($opened_file);
?>
</body>
</html>