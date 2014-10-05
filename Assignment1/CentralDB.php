<?php
function connectToDB()
{
	$db = mysqli_connect("localhost","inet2005", "itCampus2014","employees");
	if (!$db)
	{
		die('Could not connect to the Employees Database: ' .
			mysqli_error($db));
	}
	return $db;
}
?>
