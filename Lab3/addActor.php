<!DOCTYPE html>
<html>
<head>
  <title>Actor Submission</title>
</head>
<body>
<?php

include("CentralDB.php");
$db = connectToDB();


$result = mysqli_query($db,"INSERT INTO actor (first_name, last_name) VALUES ('" . $_POST['fName'] . "', '" . $_POST['lName'] . "');");

if(!$result){
	die('Could not insert record into the Sakila Database: ' . mysqli_error($db));}

$actors= mysqli_query($db,"SELECT * FROM actor order by actor_id desc limit 10;");
?>

<table border="1px">
	<tr>
		<th>First Name</th><th>Last Name</th><th>Last Updated</th>
	</tr>
<?php

while ($row = mysqli_fetch_assoc($actors))
{
	?>

	<tr>
		<td>
			<?php echo $row['actor_id']; ?><?php echo $row['first_name']; ?> </td><td> <?php echo $row['last_name']; ?></td><td> <?php echo $row['last_update']; ?></td>
	</tr>
<?php
}//end while.
?>
</table>

<form id="deleteId" name="deleteId" method="post" action="remove.php"></form>
	<label>ID to Delete:</label>
	<input type="text" name="delete_Id" id="delete_Id" />

	<p><input type="submit" name="submit" value="Delete"/></p>


</form>
<?php
mysqli_close($db);

?>



</body>
</html> 