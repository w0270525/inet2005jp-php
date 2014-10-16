<?php
session_start();
require 'isloggedin.php';
checkifloggedin(); //ensures outsider links won't gain access without logging in first
?>

<!DOCTYPE html>
<html>
<head>
  <title>Add an Employee</title>
	<script type="text/javascript">

		function isValidDate(dateString) {
			var regEx = /^\d{4}-\d{2}-\d{2}$/;
			return dateString.match(regEx) != null;
		}

		function checkForm()
		{
			if(document.getElementById("first_name").length ==0)
			{
				document.getElementById("fname").innerHTML="You must enter in a name! ";
				return false;
			}
			else if(document.getElementById("last_name").length==0)
			{
				document.getElementById("lname").innerHTML="You must enter in a name! ";
				return false;
			}
			else if isValidDate(document.getElementById('hire_date'))

				return true;
			}

	</script>
</head>
<body>
<?php

include("CentralDB.php");
$db = connectToDB();
 ?>
<form id="addEmp" name="addEmp" action="addaction.php" onsubmit="checkForm()">
	<p>Birth Day in YYYY-MM-DD format:<input type="date" id="birth_date" ></p><span id="bday"></span>
	<p>First Name:<input type="text" id="first_name"></p><span id="fname"></span>
	<p>Last Name:<input type="text" id="last_name"></p><span id="lname"></span>
	<p>Gender:
		<select>
		<option value="M">M</option>
		<option value="F">F</option>
	</select><span id="gder"></span>
	</p>
	<p>Hire date in YYYY-MM-DD format:<input type="date" id="hire_date" ></p><span id="hday"></span>
</form>



<?php
//to close database connection.
mysqli_close($db);
?>
</body>
</html> 