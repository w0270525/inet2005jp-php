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
thatCrazyFunction("1");
thatCrazyFunction("2");
thatCrazyFunction("3");
thatCrazyFunction("4");
thatCrazyFunction("5");
thatCrazyFunction("6");
thatCrazyFunction("7");


?>

</body>
</html>