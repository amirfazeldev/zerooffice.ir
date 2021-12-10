<?php
mysql_connect("localhost:3306","shotec_zero","zero@office");
mysql_select_db("shotec_zero");
$a="DELETE FROM `shotec_zero`.`pic2` WHERE `pic2`.`id` = '".$_GET["id"]."';";
$q="select * from pic2 where id='".$_GET["id"]."';";
$query=mysql_query($q);
$fetch=mysql_fetch_assoc($query);
$b=mysql_query($a);
if($b)
{
	unlink($fetch["location"]);
	header("location:pic.php");
	exit;
	
}
else
{
	header("location:pic.php?error=1010");
	exit;
}
?>