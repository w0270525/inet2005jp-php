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

insert into employees.employees (birth_date, first_name, last_name, gender, hire_date) values ( );
 ?>


<?php
//to close database connection.
mysqli_close($db);
?>
</body>
</html> 