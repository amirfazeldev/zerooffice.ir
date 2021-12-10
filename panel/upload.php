<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>zerooffice | Add Post</title>
	<link rel="stylesheet" type="text/css" href="panelstyle3.css">
	<link rel="shortcut icon"  href="./img/favicon.png">
</head>

<body>
<div id="sidebar">
		<ul>
			<a href="panel.php" class="linka"><li>Home</li></a>
			<a href="http://www.zerooffice.ir/" class="linka"><li>Visit Website</li></a>
			<a href="upload.php" class="linka"> <li>Add Post interior</li></a>
			<a href="upload2.php" class="linka"> <li>Add Post exterior</li></a>
			<a href="pic.php" class="linka"> <li>Manage Posts</li> </a>
			<a href="message.php" class="linka"><li>Messages</li></a>
		</ul>
	</div>

<form method="post"  action="check-upload.php" enctype="multipart/form-data" name="form1" id="form1">
  <p>
    <label for="fileField">File Name:</label>
    <input type="file" name="file" id="fileField">
  </p>
  <p>
    <input type="submit" name="btn" id="btn" value="Upload">
  </p>
</form>




<?php
	session_start();
	if (isset($_SESSION["panelch"])){
		//echo "Hello.Welcome to zerooffice!";
	}
	else
	{
		header("location:index.php");
		exit;
	}


?>
</body>
</html>