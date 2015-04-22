<?php include_once 'xml_admin.php'; ?>
<?php include_once 'logincheck.php'; ?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Javascript Slideshow</title>

	<style src="style.css"></style>
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>


	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<script src="script.js"></script>
	<script src="admin.js"></script>
</head>

<body>

<img name="photo" class="photo" src="" />
<br><span id="subtitle" class="subtitle"></span>
<br>
<div id="nav">
	<button id="prev" class="prev">
		Prev
	</button>

	<span id="caption" class="photoCaption">You are viewing photo...</span>
	<button id="next" class="next">
		Next
	</button>
</div>
<br>
<br>
<input type="button" id="admin_toggle" class="admin_toggle" value="Access Sign In" />
<br>
<br>
<div id="effect" class="ui-widget-content ui-corner-all">
	<div id="admin">
		<form id="administration" action="POST" <label id="username">username</label>
		<input type="text" id="username" class="username" />
		<label id="password">password</label>
		<input type="password" id="pass" class="pass" />
		<button id="login" class="login">
			Log In
		</button>
		<button id="register">
			Register
		</button>
	</div>
</div>
	<span id="welcome">Welcome<br />
    <br />
    </span>
<input id="Add" type="button" value="Add" /><input id="update" type="button" value="Update" /><input id="Delete" type="button" value="Delete" />



<div id="upload" class="upload">
	<form id="fileupload" action="#" method="post" enctype="multipart/form-data">
		<!-- https://github.com/blueimp/jQuery-File-Upload/blob/master/jquery-ui.html Redirect browsers with JavaScript disabled to the origin page -->

		<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
		<div class="fileupload-buttonbar">
			<div class="fileupload-buttons">
				<!-- The fileinput-button span is used to style the file input field as button -->
            <span class="fileinput-button">
            
                <input type="file" name="files[]" multiple>
				<input type="text" id="filetitle">
				<input type="text" id="filecomment">
            </span>
				<button type="submit" class="start">Start upload</button>

			</div>
			<!-- The global progress state -->
			<div class="fileupload-progress fade" style="display:none">
				<!-- The global progress bar -->
				<div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
				<!-- The extended global progress state -->
				<div class="progress-extended">&nbsp;</div>
			</div>
		</div>
		<!-- The table listing the files available for upload/download -->
		<table role="presentation"><tbody class="files"></tbody></table>
	</form>
</div>
</div>

</body>

</html>