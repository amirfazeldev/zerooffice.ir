<!DOCTYPE html>
<html>
<head>
	<title>Messages | zerooffice</title>
	<link rel="stylesheet" type="text/css" href="messagestyle.css">
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


	<table class="pmtable">
		<tr>
			<td>id</td>
			<td id="nam">Name</td>
			<td>Message</td>
			<td id="mes">Gmail</td>
			<td id="mes2">Phone</td>
		</tr>
	

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
	
mysql_connect("localhost:3306","shotec_zero","zero@office");
mysql_select_db("shotec_zero");
$a=mysql_query("select * from contactus");
while($b=mysql_fetch_assoc($a))
{
	echo "<tr>";
	echo "<td>".$b["id"]."</td>";
	echo "<td>".$b["name"]."</td>";
	echo "<td>".$b["message"]."</td>";
	echo "<td>".$b["mailadress"]."</td>";
	echo "<td>".$b["phonemubero"]."</td>";
	echo "</tr>";

}

?>

</table>


</body>
</html>