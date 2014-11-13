<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php

include("CentralDB.php");
$db = connectToDB();

$result = mysqli_query($db,"DELETE FROM actor WHERE name = ".$_POST["deleteId"].";");
if(!$result)
{
	die('Could not delete record from the Sakila Database: ' . mysqli_error($db));
}
Else
{
	echo "Successfully deleted " .mysqli_affected_rows($db)." record(s)";
}

mysqli_close($db);
?>
<a href="addActor.php">Back to Actor List</a>

</body>
</html> 