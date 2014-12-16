<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Create an Actor</title>
</head>
<body>
<h1>Create Actor:</h1>
<form id="formUpdate" name="formUpdate" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

	<p>
		<label>First Name:
			<input type="text" name="firstName" id="firstName" value="<?php echo $currentActor->getFirstName();?>"/>
		</label>
	</p>
	<p>
		<label>Last Name:
			<input type="text" name="lastName" id="lastName" value="<?php echo $currentActor->getLastName();?>"/>
		</label>
	</p>
	<p>
		<input type="submit" name="UpdateBtn" id="UpdateBtn" value="Update" onclick="return confirm('Really Update?')"/>
	</p>
</form>
</body>
</html>
