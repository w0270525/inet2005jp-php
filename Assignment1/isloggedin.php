<?php

function checkifloggedin() {

	session_start();
	if(empty($_SESSION['myusername']) ||empty($_SESSION['mypassword'])){
		header('login.php');
	}
}




?>