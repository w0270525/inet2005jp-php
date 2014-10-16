<?php
require 'isloggedin.php';
checkifloggedin();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Assignment 1</title>
	<script>

	</script>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<?php

include("CentralDB.php");
$db = connectToDB();
if (isset($_POST['emp_query'])){
	$query = $_POST['emp_query'];
}
if(isset($_POST['query']))
	$_SESSION['query']=$_POST['query'];

if(isset($_SESSION['currentnumber']))
{
	$currentnumber = $_SESSION['currentnumber'];
	if(isset($_SESSION['next']))
		$currentnumber+=25;
	elseif (isset($_SESSION['prev']) && $currentnumber>0)
		$currentnumber-=25;
}
else {
	$currentnumber=0;
	$_SESSION['currentnumber']= $currentnumber;
}


if(isset($_SESSION['query'])){
$querytotal==mysqli_query($db, 'SELECT * FROM employees.employees where (last_name LIKE "%'.$query.'%") or (first_name like "%'.$query.'%")');
while ($count= mysqli_fetch_assoc($querytotal)) {
	$count+=1;
	$_SESSION['count']=$count;
}

$queryresult=mysqli_query($db, 'SELECT * FROM employees.employees where (last_name LIKE "%'.$query.'%") or (first_name like "%'.$query.'%") order by first_name LIMIT '.$currentnumber.',25; ');
}
?>


<a href='logout.php'>logout</a>

<h1>Search First and Last Names from Database</h1>

<form id="employee_query" method="post"  onsubmit="index.php" >
	<input name="emp_query" type="text">


	<input type="submit" name="query" id="query" value="Employee Query">

</form>


<form id="nav" method="post"  onsubmit="index.php" >
		<?php if($currentnumber!=0){

			echo  '<input type="submit" name="prev" id="prev" value="Prev">';
		}
		?>

<?php if ($count>= $currentnumber+25)
echo '<input type="submit" name="next" id="next" value="Next">';
?>

</form>

<form id="addemployee" method="post" onsubmit="addemployee.php">

	<input type="submit" name="add" id="add" value="Add an Employee">

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

	while ($row = mysqli_fetch_assoc($queryresult))
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
			<td><?php echo '<div class="edit"><img src="pencil.png"></div>' ?></td>
			<td><?php echo '<div class="delete"><img src="delete.png"></div>' ?></td>
		</tr>

	<?php }//end while. ?>


</table>


<?php
if ($currentnumber)

?>

<?php
//to close database connection.
mysqli_close($db);
?>

</body>
</html> 