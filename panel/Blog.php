<!DOCTYPE html>
<html>
<head>
	<title>zero office | Blog</title>
	<link rel="stylesheet" type="text/css" href="blogstyle.css">
	<link rel="shortcut icon"  href="./img/favicon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <script type="text/javascript" src="backtotop.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
    
</head>
<body>
<div id="menu">
				<ul>
					<li><a href="../zerooffice/index.html">Home</a></li>
					<li><a href="../zerooffice/Blog.php"  style="color: #ffc000;border-bottom: 2px solid #ffc000;padding-bottom: 5px;">Blog</a></li>
					<li><a href="../zerooffice/Contact.php">Contact Us</a></li>
					<li><a href="../zerooffice/aboutus.html">About Us</a></li>
				</ul>
			</div>
			<video width="1600" id="headervid" autoplay><source src="Composition-slider.mp4" type="video/mp4"></video>
			<!-- <div id="header"></div> --> 
			<p id="fp">Zeroblog</p>
			<p id="sp">
				Architecture means presenting the best <br>solution, whether using past solutions or <br>creating new solutions to achieve any<br> goal. Architecture is the art and<br> knowledge of building design and other<br> physical structures.

			</p>
		<a href="https://www.instagram.com/arman.ghanizadeh/" id="al">	<p id="thp">Designed by Arman Ghanizadeh</p> </a>
		<p id="rtp">Here the distance between relaity<br>& imagination is zero</p>
		<div id="rightbar"></div>
	
	<center>	<div id="righbottmtbar"></div>
<table  align="center" width="770" class="managetb" >
<tr>
<td align="center" > </td>

</tr>
<?php
mysql_connect("localhost","root","");
mysql_select_db("zerooffice");
$i=1;
$a="select * from pic;";
$b=mysql_query($a);
while($c=mysql_fetch_assoc($b))
{
	echo "<tr>";
			echo "<td align=center padding=10><img src=.".$c["location"]." width=1280 height=720 > </td>";
			
			$i++;
	echo "</tr>";

}
	echo "</table>";
?>
</center>
</table>
</body>
</html>