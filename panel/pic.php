<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>zerooffice | Manage Posts</title>
	<link rel="stylesheet" type="text/css" href="panelstyle2.css">
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


<table  align="center" width="770" class="managetb">
<tr>
<td align="center">id</td>
<td align="center" >Name </td>
<td align="center" > Picture </td>
<td align="center"> Delete </td>
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
$i=1;
$a="select * from pic;";
$b=mysql_query($a);
while($c=mysql_fetch_assoc($b))
{
	echo "<tr>";
	echo "<td align=center>".$i."</td>";
		echo "<td align=center>pic".$i."</td>";
			echo "<td align=center><img src=.".$c["location"]." width=640 height=360 padding=10></td>";
			echo "<td align=center><a href=pic-del.php?id=".$c["id"].">del</a></td>";
			$i++;
	echo "</tr>";

}
	echo "</table>";
?>



<br><br>



<table  align="center" width="770" class="managetb">
<tr>
<td align="center">id</td>
<td align="center" >Name </td>
<td align="center" > Picture </td>
<td align="center"> Delete </td>
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
$i=1;
$a="select * from pic2;";
$b=mysql_query($a);
while($c=mysql_fetch_assoc($b))
{
	echo "<tr>";
	echo "<td align=center>".$i."</td>";
		echo "<td align=center>pic".$i."</td>";
			echo "<td align=center><img src=.".$c["location"]." width=640 height=360 padding=10></td>";
			echo "<td align=center><a href=pic-del2.php?id=".$c["id"].">del</a></td>";
			$i++;
	echo "</tr>";

}
	echo "</table>";
?>
</body>
</html>