<?php
function connectToDB()
{
	$db = mysqli_connect("localhost","inet2005", "itCampus2014","sakila");
	if (!$db)
	{
		die('Could not connect to the Sakila Database: ' .
			mysqli_error($db));
	}
	return $db;
}
?>
