<!DOCTYPE html>
<html
<head>
	<title>Login|zerooffice</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="./img/favicon.png">
</head>
<center>
	<div id="erordivui"></div>
	<?php  
		if (isset($_GET["empty"])) {
			echo "<font color= yellow; family= Tahoma;>"."please put name & password at first!"."</font>";
		}

		if (isset($_GET["wrongpass"])) {
			echo "<font color= yellow; family = Tahoma;>"."the password or username is incorrect!"."</font>";
		}

		echo "<br>";
		echo "<br>";

	?>

	</center>

	<center>
		<div id="zeroname">
			ZERO OFFICE
		</div>
		
	</center>
	<center><form action="check.php" method="POST">
		UserName: <input type="text" name="txt1" class="txt-area">
		<br><br>
		Password: <input type="Password" name="pass1" class="txt-area">
		<br><br>
		<input type="submit" name="btn1" value="Login" id="send-btn">

	</form>
</center>
<body>

</body>
</html>