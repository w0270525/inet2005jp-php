<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
<?php

$celsius;
for ($fahrenheit =0; $fahrenheit <=100; $fahrenheit++) {
	$celsius = ($fahrenheit - 32) * (5/9);
	$celsius = round($celsius,0);?>

<p>
<?php echo $fahrenheit; ?> degree(s) fahrenheit equals <?php echo $celsius; ?> degrees Celsius.
	</p>
<?php } ?>
</table>
</body>
</html>


