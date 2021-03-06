<!DOCTYPE html>
<html>
<head>
  <title>Shape Area Calculator</title>
</head>
<body>
<?php
require_once("Shape.php");
require_once("Rectangle.php");
require_once("Circle.php");
require_once("Triangle.php");



?>


<form id="form1" name="form1" style="width: 500px;" method="post" action="index.php">
	<fieldset>
		<legend>Circle</legend>
		<p>
			<label>Radius
				<input type="text" name="Radius" id="Radius" />
			</label>
		</p>
		<p>
			<label>
				Resizeable
				<input type="text" name="resize" id="circleResize" />
			</label>
		</p>
	</fieldset>
	<fieldset>
		<legend>Rectangle</legend>
		<p>
			<label>Length
				<input type="text" name="rectLength" id="rectLength" />
			</label>
		</p>
		<p>
			<label>Width
				<input type="text" name="rectWidth" id="rectWidth" />
			</label>
		</p>
	</fieldset>
	<fieldset><legend>Triangle</legend>
		<p>
			<label>Base
				<input type="text" name="triBase" id="triBase" />
			</label>
		</p>
		<p>
			<label>Height
				<input type="text" name="triHeight" id="triHeight" />
			</label>
		<p>
			<label>
				Resizeable
				<input type="text" name="resize" id="triResize" />
			</label>
		</p>

	</fieldset>
	<input name="Calculate" type="submit" value="Calculate" />
</form>
<p>Results:</p>

<?php

if (isset($_POST["Radius"])){
$cir=new Circle("Circle", $_POST["Radius"]);
	echo "<p><b>Shape: Circle</b></p>";
	echo "<p>Area: " .$cir->CalculateSize(). "</p>";
	echo "<p>Re-sized area: ".$cir->resize($_POST["circleResize"])."</p>";

}

if (isset($_POST["rectLength"])){
$rect=new Rectangle("Rectangle", $_POST["rectLength"], $_POST["rectWidth"]);

echo "<p><b>Shape: Rectangle</b></p>";
echo "<p>Area: " .$rect->CalculateSize()."</p>";
}

if(isset($_POST["triBase"])){
$tri=new Triangle("Triangle", $_POST['triBase'], $_POST['triHeight']);
	echo "<p><b>Shape: Triangle</b></p>";
	echo "<p>Area: " .$tri->CalculateSize()."</p>";
	echo "<p>Re-sized area: ".$tri->resize($_POST["triResize"])."</p>";

}
?>

</body>
</html> 