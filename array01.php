<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Array</title>
</head>
<body>
<?php
$todo = array();
$todo = array(14,"Clean bedroom","wash dishes","Make assignment");



$todo[0]="Take a bath";
print($todo[0]);

$todo[]="Go to class";

print("Using FOR LOOP");
for ($i=0;$i<(count($todo));$i++){

	print($todo[$i]);
	print("<br>");
}

print("Using PRINT_R Function");
print_r($todo);

$tas=array("MD", "BH", "KK", "HM","JP");
for ($i=0; $i < (count($tas)) ; $i++) { 
	$tas[$i]=strtolower($tas[$i]);
	print($tas[$i]);
	print("<br>");

}

$morph=array_shift($tas);
print_r($tas);

?>

<h2>The answer is <?=6*7 ?></h2>

</body>
</html>