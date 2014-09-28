<!DOCTYPE html>
<html>

<head>
	<title>
		Actors of Film!
	</title>
</head>
<body>
<table border="1px">

	<tr>
		<th>Film</th><th>Description</th>
	</tr>
<?php
$db = mysqli_connect("localhost","inet2005", "itCampus2014","sakila");
if (!$db)
{
die('Could not connect to the Sakila Database: ' . mysqli_error($db));
}

$result = mysqli_query($db,"SELECT * FROM film LIMIT 0,10");

if(!$result)
{
	die('Could not retrieve records from the Sakila Database: ' . mysqli_error($db));
}
while ($row = mysqli_fetch_assoc($result))
{
	?>

	<tr>
		<td>
	<?php echo $row['title']; ?> </td><td> <?php echo $row['description']; ?></td>
	</tr>
<?php
}


mysqli_close($db);

?>

</table>

</body>
</html>