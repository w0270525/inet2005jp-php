<!DOCTYPE html>
<html>
<head>
  <title>Assignment 1</title>
	<script></script>

	</head>
<body>
<?php

include("CentralDB.php");
$db = connectToDB();

?>
<?php
 ?>

<table border="1px">
	<tr>
		<th>First Name</th><th>Last Name</th><th>Last Updated</th>
	</tr>
	<?php

	while ($row = mysqli_fetch_assoc($employees))
	{
	?>

	<tr>
		<td>
			<?php echo $row['actor_id']; ?><?php echo $row['first_name']; ?> </td><td> <?php echo $row['last_name']; ?></td><td> <?php echo $row['last_update']; ?></td>
	</tr>
<?php
}//end while.
?>
</body>
</html> 