<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php
session_start();
if (isset($_POST["btn1"])) {
	if ($_POST["txt1"]=="zeroadmin2020" && $_POST["pass1"] =="abcd1234nh") {
		$_SESSION["panelch"]="ok";
		header("location:panel.php");
		exit;
	}
	else if ($_POST["txt1"]=="" && $_POST["pass1"] =="") {
	
		header("location:index.php?empty=2021");
		exit;
	}
	else
	{
		header("location:index.php?wrongpass=2020");
		exit;
	}
}
else
{
	header("location:index.php");
	exit;
}

?>

<body>

</body>
</html>