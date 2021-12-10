<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Contact Us | zerooffice</title>
	<link rel="stylesheet" type="text/css" href="contactstyle.css">
	<link rel="shortcut icon"  href="./img/favicon.png">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<body>
	
            <!--  fierst Menu   

			<div id="menu">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="Blog.php">Blog</a></li>
					<li><a href="Contact.php" style="color: #ffc000;border-bottom: 2px solid #ffc000;padding-bottom: 5px;">Contact Us</a></li>
					<li><a href="aboutus.html">About Us</a></li>
				</ul>
			</div>


            -->
            
                    <section class="page">
            <header>
                <div class="menu-icon">
                    <span class="bar"></span>
                </div>
                
                <nav>

                    <ul>
                        <a href="index.html"><li>Home</li></a>
                        <a href="Blog.php"> <li>Blog</li></a>
                        <a><li style="color: #ffc000;padding-bottom: 5px;">Contact Us</li></a> 
                        <a href="AboutUs.html"><li>About Us</li></a>
                    </ul>
                </nav>
            </header>
    </section>
            
    <!--  <div id="conttxt"></div>  -->        
    
	<div class="formboxdiv">
	
		<span class="spanar">
	<form action="contactcheck.php" method="Post"  class="form100">
		<span>SAY SOMETHING...</span>
		<input type="text" name="name" class="formbox" placeholder="Your Name...">
		<br><br>
		<input type="text" name="mailadress"class="formbox" placeholder="Gmail Adress...">
		<br><br>
		<input type="text" name="phonemubero"class="formbox" placeholder="Telephone Number...">
		<br><br>
		<input type="text" name="message" class="formbox" placeholder="Your Message..." id="messagebox">
		<br><br>
        <input type="submit" name="sendbtn" value="Send" id="sendbtn">
		
	</form>
        </span>
        
	
	<br><br>
	<div id="erorbox">

	</div>

<div class="eror-font">
<?php
		if (isset($_GET["empty"])) {
			echo "<font color= yellow; family= Tahoma;>"."Please Complete the form at first!"."</font>";
		}
		if (isset($_GET["ok"])) {
			echo  "<font color= green; family= Tahoma;>"."your message was sent sucsessfully!"."</font>";
		}
		if (isset($_GET["eror"])) {
			echo "<font color= yellow; family= Tahoma;>"."Your Message was not sent!Please try again."."</font>";
		}
		
	?>
	</div>
</div>

<a href="https://www.instagram.com/zero.office/" id="alc"><p>zero.office</p></a>



       
       <nav class="left-content">
           <p class="p-lc">Get in touch</p>
           <p class="p2-lc">your criticism makes us stronger...
           <br>
           <span>
              <p align="justify" class="plshi">
               Zerooffice  waiting for your valuable messages in different fields such as cooperation, criticism, work order and ....
               </p>
           </span>
           </p>
           
           <nav class="shape-square"></nav>
         
               <nav class="shape-txt">
               <p>+98 09116752079 / +98 09116225647</p>
               <a href="https://www.instagram.com/zero.office/"><p id="a-hov">zero.office</p></a>
               <p id="p-le">Mazandaran/Motelghou / Next to the Parvin Etesami highschool</p>
           </nav>
           
       </nav>
       <div class="last-c">
           
                      <nav class="shape-square"></nav>
             <h1>Get in touch</h1>
             <br><br><br><br>
              <p>
                  Zerooffice  waiting for your valuable 
messages in different fields such as cooperation, criticism, work order and ....
              </p>
               <div class="shape-txt2">
               <p> 09116752079 /  09116225647</p>
               <a href="https://www.instagram.com/zero.office/"><p id="a-hov">zero.office</p></a>
               <p id="p-le">Next to the Parvin Etesami highschool</p>
           </div>
           
      
           
       </div>
       
       <a href="#" id="Back-to-Top"><i class="fas fa-sort-up"></i></a>
       
       <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>  
       <script type="text/javascript" src="myScript2.js"></script>
       <script src="backtotop.js"></script>
       
</body>
</html>