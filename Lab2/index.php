<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title></title>
</head>
<body>
<?php
function thatCrazyFunction($inputtedString) {

	switch($inputtedString){
		case "1":
			echo "<h1>This is an H1</h1>";
			break;
		case "2":
			echo "<h2>This is an H2</h2>";
			break;
		case "3":
			echo "<h3>This is an H3</h3>";
			break;
		case "4":
			echo "<h4>This is an H4</h4>";
			break;
		case "5":
			echo "<h5>This is an H5</h5>";
			break;
		case "6":
			echo "<h6>This is an H6</h6>";
			break;
		default:
			echo "Error. please choose 1-6";

	}//End switch
}//End function


//needs to be made in a loop.
for($i =1;$i < 8; $i++) {
thatCrazyFunction($i);

}

?>

<hr />

<?php //Part 2

function byValue($blahVariable) {
	$blahVariable=$blahVariable."...blah";

	echo $blahVariable;
}
function byReference(&$blahVariable) {
	$blahVariable=$blahVariable."...blah";

	echo $blahVariable;
}

$stringVariable="Hello, World!";

echo $stringVariable;
?><p><?php
echo byValue($stringVariable);
?></p><p><?php
echo $stringVariable;
?></p>
<p><?php
echo byReference($stringVariable);
?></p>

<p><?php
echo $stringVariable;
	?></p>

<br />

<?php //Part 3 Global functions
$ageVariable=32;

function shoutYourAge(){
	//using global variable to allow access to the variable while in
	global $ageVariable;
	echo "<h1>OMG you are ".$ageVariable." years old!";
}

shoutYourAge();
?>




</body>
</html>