<?php
session_start();

ob_start();
$host="localhost"; // Host name
$username=""; // Mysql username
$password=""; // Mysql password
$db_name="employees"; // Database name
$tbl_name="members"; // Table name

// Connect to server and select databse.
$db=mysqli_connect("localhost","inet2005", "itCampus2014","employees");
if(!$db) {
	die("cannot select DB");
}

// Define $myusername and $mypassword
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($db, $myusername);
$mypassword = mysqli_real_escape_string($db, $mypassword);


$hashedpwd = hash("sha1", $mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and user_password='$hashedpwd'";
$result=mysqli_query($db,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
	$_SESSION["myusername"]=$myusername;
	$_SESSION["mypassword"]=$mypassword;
	header("location:index.php");
}else {
	echo "<p>Wrong Username or Password</p>";
	echo "<p><a href='login.php'>Return to Login</a></p>";

}

			//to close database connection.
			mysqli_close($db);

?>