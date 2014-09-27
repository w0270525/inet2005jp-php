<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table border="1px">

<tr>
	<th>Celsius</th>
	<th>Fahrenheit</th>
</tr>
	<?php


	for ($fahrenheit =0; $fahrenheit <=100; $fahrenheit++) {
		$celsius = ($fahrenheit - 32) * (5/9);
		$celsius = round($celsius,0);?>
<tr>
	<?php echo "<td>".$fahrenheit."</td>" ?> <?php echo "<td>". $celsius."</td>"; ?>
</tr>


<?php } ?>
</table>
</body>
</html>


