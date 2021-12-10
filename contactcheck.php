<?php
if (isset($_POST["sendbtn"])) {
	if ($_POST["name"]=="" || $_POST["message"]=="" || $_POST["mailadress"]=="" || $_POST["phonemubero"]=="" ) {
		header("location:Contact.php?empty=1545");
		exit;
	}
	mysql_connect("localhost:3306","shotec_zero","zero@office");
mysql_select_db("shotec_zero");
	$a="INSERT INTO `shotec_zero`.`contactus` VALUES (NULL, '".$_POST["name"]."', '".$_POST["message"]."', '".$_POST["mailadress"]."', '".$_POST["phonemubero"]."')";
	$b=mysql_query($a);
	if ($b) {
		header("location:Contact.php?ok=3565");
		exit;
	}
		else
		{
			header("location:Contact.php?eror=9899");
			exit;
		}
	}
	

?>