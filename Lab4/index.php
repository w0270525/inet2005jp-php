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


<form id="form1" name="form1" method="post" action="">
	<fieldset>
		<legend>Circle</legend>
		<p>
			<label>Radius
				<input type="text" name="Radius" id="Radius" />
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
		</p>
	</fieldset>
	<input name="Calculate" type="submit" value="Calculate" />
</form>
<p>Results:</p>
<p></p>



</body>
</html> 