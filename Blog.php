<!DOCTYPE html>
<html>
<head>
	<title>zero office | Blog</title>
	<link rel="stylesheet" type="text/css" href="blogstyle.css">
	<link rel="shortcut icon"  href="./img/favicon.png">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <script type="text/javascript" src="backtotop.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
    
    
</head>
<body>
	

               <header>
                <div class="menu-icon">
                    <span class="bar"></span>
                </div>
                
                <nav>
                    <div class="logo">
                        <img src="img/favicon.png" alt="logo">
                    </div>
                    <ul>
                        <a href="index.html" class="header-link"><li>Home</li></a>
                        <a href="blog-header.html" class="header-link"> <li  style="color: #ffc000;padding-bottom: 5px;">Blog</li></a>
                        <a href="Contact.php" class="header-link"><li>Contact Us</li></a>
                        <a href="AboutUs.html" class="header-link"><li>About Us</li> </a>
                    </ul>
                </nav>
            </header>
            
        <div class="header">
            <p>ZERO GALLERY</p>    
        </div>

	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br>
	






<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">interior</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">exterior</button>
</div>

<div id="London" class="tabcontent">
  
  
  <div class="row">
<?php
mysql_connect("localhost:3306","shotec_zero","zero@office");
mysql_select_db("shotec_zero");
$i=1;
$a="select * from pic";
$b=mysql_query($a);
while($c=mysql_fetch_assoc($b))
{
	echo "<div class=column >";
		echo "<img src=./panel".$c["location"]." width=100% class=blog-img >";
	echo "</div>";
	
$i++;
}
?>
</div>
  
  
</div>

<div id="Paris" class="tabcontent">
  <div class="row">
<?php
mysql_connect("localhost:3306","shotec_zero","zero@office");
mysql_select_db("shotec_zero");
$i=1;
$a="select * from pic2";
$b=mysql_query($a);
while($c=mysql_fetch_assoc($b))
{
	echo "<div class=column >";
		echo "<img src=./panel".$c["location"]." width=100% class=blog-img >";
	echo "</div>";
	
$i++;
}
?>
</div>
</div>








 <a href="#" id="Back-to-Top"><i class="fas fa-sort-up"></i></a>

 <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="myScript.js"></script>

<script type="text/javascript" src="app.js"></script>
<script src="backtotop.js"></script>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</body>
</html>