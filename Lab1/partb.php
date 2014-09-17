<!DOCTYPE html>
<html>

<head>
<title>Welcome to Part B</title>
</head>
<body>
<?php
	echo "Greetings from Lab 1.";
?>
<p>
	<?php echo "<h3>Hi. This is an 'H3' tag.</h3>";	?>

<?php

	$myName = "Jonathan";

	echo $myName;

?>
<br /><br />
	<?php
		$thirtyTwo = 32;
		$fourteen = 14;
		$eightyThree = 83;

	$totalOne = ($thirtyTwo * $fourteen) + $eightyThree;

	echo "(32 * 14) + 83 = " . $totalOne;

?>
<br /><br />

	<?php
		$tenTwentyFour = 1024;
		$oneTwentyEight = 128;
		$seven = 7;

	$totalTwo = ($tenTwentyFour / $oneTwentyEight) - $seven;

	echo "(1024 / 128) = ". $totalTwo;


	?>
	<br /><br />


	<?php

	$sevenSixNine = 769;
	$six = 6;
	$totalThree = $sevenSixNine % $six;

	echo "The remainder of 769 divided by 6 is : ". $totalThree;
	?>
<br /><br />

	<?php //loops
	$countdown = 10;

	while ($countdown > 0):
		echo $countdown ."...";
		$countdown--;

	endwhile;
		echo "Blast Off";
	?>
	<br /><br />

	<?php

	$array = array("Red", "Blue", "Orange", "Yellow", "Green", "Purple", 'Off-White');

	//Regular for loop.
	for($i = 0; $i<=6;$i++) {

		echo "{$array[$i]} ";

	}
	echo "<br /><br />";

	//ForEach loop
	foreach($array as $i => $value) {

		echo "{$array[$i]} ";
	}

	echo "<br /><br />";


	//Some other way
	print_r($array);
	?>
	<br /><br />

</p>

</body>
</html>