<?php 

session_start();
require 'config.php';

if(empty($_SESSION['user1'])){

	header("location:login3.html");}

?>




<!DOCTYPE html>
<html>
<head type="text/css"><link rel ="stylesheet" href="style1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  


</head>


<title>Ceylon Hardware Company</title>

<body background="Images/wb1.jpg">
<header id="t1"><a href="page1.html"><img src="Images/L1.jpg"></a>Ceylon Hardware Company


 

 </header>
 <div class="dropdown">
 <a href="page1.html"><button class="active">Home</button></a>
 </div>
 
<div class="dropdown">
  <button class="active">Services</button>
	 <div class="dropdown-content">
    <a href="requirement1.html">Get Support</a>
    <a href="login.html">Forum</a>
  </div>
  </div>
  
  <div class="dropdown">
  <button class="active">Products</button>
	<div class="dropdown-content">
  <a href="#">Desktop</a>
   <a href="laptops.php">Laptop</a>
    <a href="#">Tools</a>
 </div>
 </div>
  <div class="dropdown">
 <a href="aboutus.html"><button class="active">About Us</button></a>
 </div>
<div class="dropdown">
 <a href="contact.html"><button class="active">Contact Us</button></a>
 </div>
 
 
 
</br> </br>

 
 <div class="container" align="right">
 <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Hello <?php  echo "{$_SESSION['user1']}";?> 
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      
    
      <li role="presentation"><a role="menuitem" tabindex="-1" href="signout1.php?out='1'">Sign Out</a></li>
	  </ul>
  </div>
</div>
 
 
			<br><br>
<center><a href="requirement1dis.php"><button type="button" class="btn btn-primary" >View Requirement</button></a></center><br><br>
<center><a href="contactdis.php"><button type="button" class="btn btn-primary" >View contact us </button></a></center><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<a href="#"><img class="transparent"src="Images/fb.png" height="50px" width="50px" align="right"></a>
<a href="#"><img class="transparent"src="Images/twitter.jpg" height="50px" width="50px" align="right"></a>

<a href="#"><img class="transparent"src="Images/google.png" height="50px" width="50px" align="right"></a>

<a href="#"><img class="transparent"src="Images/intagram.jpg" height="50px" width="50px" align="right"></a>
<a href="https://www.youtube.com/"><img class="transparent"src="Images/youtube.png" height="50px" width="50px" align="right"></a>






<footer><h4>2018 Ceylon Hardware Company,INC.ALL RIGHT RESERVED</h4>
</footer></body></html>

<?php
	mysqli_close($conn);
	
	?>
			
			