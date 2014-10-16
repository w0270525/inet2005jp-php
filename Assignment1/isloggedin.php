<?php

function checkifloggedin() {

	session_start();
	if(empty($_SESSION['myusername']) || empty($_SESSION['mypassword'])){
		header('location:login.php');
	}
}




?>