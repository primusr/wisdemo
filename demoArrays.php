<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Multidimensional Array</title>
</head>
<body>
<?php
	
	$tasks = [

		['Learn PHP programming',2],
		['Pracitce PHP',2],
		['Work',8],
		['Do Exercise',1],
	];

	$tasks[]=['Build a new program in PHP',2];
	unset($tasks[2]);

	print_r($tasks);
?>

<h2>The answer is <?=6*7 ?></h2>
</body>
</html>