<!DOCTYPE html>
<html>
<head>
  <title>Actor Submission</title>
</head>
<body>
<?php


include("CentralDB.php");
$db = connectToDB();


?>
<h1>Actor Submission Form</h1>

<form id="film" name="film" method="post" action="addActor.php">
	<p>
		<label>First Name</label>
		<input type="text" name="fName" id="fName" />
	</p>
	<p>
		<label>Last Name</label>
		<input type="text" name="lName" id="lName" />
	</p>
	<p><input type="submit" name="Submit" value="Send Form"/></p>
</form>

</body>
</html> 