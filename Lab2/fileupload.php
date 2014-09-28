<!DOCTYPE html>
<html>
<head>
<title>File Upload Results</title>
</head>
	<body>
	<?php
	         $fileTmpName = $_FILES['userImage']['tmp_name'];
	         $fileOrigName = $_FILES['userImage']['name'];
	         $fileSize = $_FILES['userImage']['size'];
	         $fileUploadError = $_FILES['userImage']['error']; // 0 means success
	         $result = move_uploaded_file($fileTmpName,"uploads/".$fileOrigName);
	 ?>
	<p>Tmp: <?php echo $fileTmpName; ?></p>
	<p>Org: <?php echo $fileOrigName; ?></p>
	<p>Size: <?php echo $fileSize; ?></p>
	<p>Error: <?php echo $fileUploadError; ?></p>
</body>
</html>