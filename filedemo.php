<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>File Demo</title>
</head>
<body>
<?php 
$text=file_get_contents("file.txt");
print($text);

#reverse a file
$text1=strrev($text);
file_put_contents("file.txt", $text1);
?>
</body>
</html>