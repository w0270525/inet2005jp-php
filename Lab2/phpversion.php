<html>
<head>
	<title>
		php version information
	</title>
</head>
<body>
<p>
<h1><?php
		echo "This page was rendered in PHP version ".phpversion();
	?></h1>

</p>
<p>
<h1><?php
		echo "The page is using ZEND version ".zend_version();
	?></h1>
</p>
<p>
	<h1>
	<?php
	echo "The default mimetype is : ".ini_get("default_mimetype");
	?>
	</h1>
</p>
</body>


</html>