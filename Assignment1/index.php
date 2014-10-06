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
		<h1>Search First and Last Names from Database</h1>
		<form id="employee_query" method="post"  onsubmit="" >
			<input name="emp_query" type="text">

		</form>

		<table border="1px">

			<tr>
				<th>Emp. Number</th>
				<th>Birth Date</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Gender</th>
				<th>Hire Date</th>
			</tr>
			<?php

			while ($row = mysqli_fetch_assoc($employees))
			{
			?>

			<tr>
				<td><!--loop through rows to add results.-->
					<?php echo $row['emp_no']; ?></td>
				<td><?php echo $row['birth_date']; ?></td>
				<td><?php echo $row['first_name']; ?></td>
				<td><?php echo $row['last_name']; ?></td>
				<td><?php echo $row['gender']; ?></td>
				<td><?php echo $row['hire_date']; ?></td>
			</tr>

			<?php }//end while. ?>





			<?php
			//to close database connection.
			mysqli_close($db);
			?>

	</body>
</html> 