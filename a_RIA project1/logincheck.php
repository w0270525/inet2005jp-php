<?php
session_start();
ob_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="db"; // Database name
$tbl_name="login"; // Table name
// Connect to server and select databse.
$db=mysqli_connect("localhost","db", "root","");
if(!$db) {
	die("cannot select DB");
}
// Define $myusername and $mypassword
$myusername=$_POST['username'];
$mypassword=$_POST['password'];
// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($db, $myusername);
$mypassword = mysqli_real_escape_string($db, $mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
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