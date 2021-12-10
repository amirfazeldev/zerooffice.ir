<!DOCTYPE html>
<html>
<head>
	<title>zerooffice | Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="panelstyle.css">
	<link rel="shortcut icon"  href="./img/favicon.png">
</head>
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
	<div id="chartbox">
		<a href="http://www.zerooffice.ir/"><div class="chart">
			<div class="square" id="s1"></div>
			<p class="psq">Visit Website</p>
			<p class="p2s" id="p2s1">in this part you can visit zerooffice website</p>
		</div>
		</a>
		<div class="chart">
			<div class="square" id="s2"></div>
			<a href="upload.php" class="linka"> <p class="psq" id="psq1">Add Post</p> </a>
			<p class="p2s" id="p2s2">in this part you can Add post in Blog</p>
		</div>
		<div class="chart">
			<div class="square" id="s3"></div>
			<a href="pic.php" class="linka"><p class="psq" id="psq2">Manage Posts</p></a>
			<p class="p2s" id="p2s3">in this part you can Delete & Update <br>your last posts</p>
		</div>
		<a href="message.php"> <div class="chart">
			<div class="square" id="s4"></div>
			<p class="psq" id="psq3">Messages</p>
			<p class="p2s" id="p2s4">in this part you can check the messages <br>All user send to zerooffice</p>
		</div></a>
	</div>
	
</body>
</html>