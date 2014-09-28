<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="myStyle.css">
	<title>Celsius Conversion</title>
</head>
<body>

<table border="1px">

<tr>
	<th>Celsius</th>
	<th>Fahrenheit</th>
</tr>
	<?php


	for ($celsius =0; $celsius <=100; $celsius++) {
		$fahrenheit = ($celsius *(9/5))+32;
		$fahrenheit = round($fahrenheit,0);?>
<tr>
	<?php echo "<td>".$celsius."</td>" ?> <?php echo "<td>". $fahrenheit."</td>"; ?>
</tr>


<?php } ?>
</table>
</body>
</html>


