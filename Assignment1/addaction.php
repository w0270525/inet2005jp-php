<?php
session_start();
require 'isloggedin.php';
checkifloggedin(); //ensures outsider links won't gain access without logging in first
?>

<!DOCTYPE html>
<html>
<head>
  <title>add action</title>
</head>
<body>
<?php

include("CentralDB.php");
$db = connectToDB();

$querytotal=mysqli_query($db, 'insert into employees.employees (birth_date, first_name, last_name, gender, hire_date) values ('.$_SESSION['birth_date'].','.$_SESSION['first_name'].','.$_SESSION['last_name'].','.$_SESSION['gender'].', '.$_SESSION['hire_date'].' );');




?>


<?php
//to close database connection.
mysqli_close($db);
?>
</body>
</html> 