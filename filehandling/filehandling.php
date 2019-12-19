<!Doctype html>
<html>
<head>
<title>Working with file handling problem</title>
</head>
<body>
<?php
//opening a file
$opened_file = fopen("filehandle.txt","r");
//reading a wholefile
echo fread($opened_file,filesize("filehandle.txt"));
//closing a file
fclose($opened_file);
?>
</body>
</html>