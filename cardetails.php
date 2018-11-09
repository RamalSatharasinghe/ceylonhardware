<?php 

session_start();

if(empty($_SESSION['user'])){

	header("location:login2.html");}

?>




<!DOCTYPE html>
<html>
<head type="text/css"><link rel ="stylesheet" href="style1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
<script type="text/javascript">
function newfun(){
  var new1= document.foorm.cardnum.value;
  var new2= document.foorm.cod.value;
  var new3= document.foorm.exp.value;
  
  if( new1=="" || new2==""  || new3=="" )
  {
    alert("You Cannot Leave Spaces Here");
    return false;
  }

}



</script>

<style>

#vate{
	
	width:100%;
	height:100%;
	max-width:1920px;
	

}
#subsiri{
	
	width: 150px;
}</style></head>


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
  <a href="laptops.html">Desktop</a>
   <a href="laptops.html">Laptop</a>
    <a href="#">Tools</a>
 </div>
 </div>
  <div class="dropdown">
 <a href="aboutus.html"><button class="active">About Us</button></a>
 </div>
<div class="dropdown">
 <a href="contact.html"><button class="active">Contact Us</button></a>
 </div>
 
 <a href="signup.html"><img class="transparent"src="Images/signup.png" width="50px" height="50px" align="right"></a>
 
  <div id="search" align="right">
<input type="text" name="text" class="search" placeholder="Search here" >
<button class="submit" >&#128269 </button>
</div>
</br> </br>

 
 <div class="container" align="right">
 <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Hello <?php  echo "{$_SESSION['user']}";?> 
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="account.php">Account</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="checkcard.php">Card Details</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="signout.php?out='1'">Sign Out</a></li>
	  </ul>
  </div>
</div>
 
 
 
 <div id="vate">
 <center>
<h2><font size="8" color="black">Card Details</h2></font></br></br></br>
<form name="foorm" action="bank.php" onsubmit="return newfun();" method ="POST"><font size="6" color="black">
Card Number:</br></br><input type="text" size="30" name="cardnum" value=""></br></br>
Code(Ex:123-ef) :</br></br> <input type="text" size="30" name="cod" value=""></br></br>
Expire Date:</br></br>      <input type="text" size="30" name="exp" value=""></br></br></br>


 <input type="checkbox" name="checkrobot" value="robot"> I am not a robot</font></br></br>

<input id="subsiri" type="submit" />
</div>

</div>

</form></center> 
</div></center>
</div>
<br><br>

<a href="#"><img class="transparent"src="Images/fb.png" height="50px" width="50px" align="right"></a>
<a href="#"><img class="transparent"src="Images/twitter.jpg" height="50px" width="50px" align="right"></a>

<a href="#"><img class="transparent"src="Images/google.png" height="50px" width="50px" align="right"></a>

<a href="#"><img class="transparent"src="Images/intagram.jpg" height="50px" width="50px" align="right"></a>
<a href="https://www.youtube.com/"><img class="transparent"src="Images/youtube.png" height="50px" width="50px" align="right"></a>






<footer><h4>2018 Ceylon Hardware Company,INC.ALL RIGHT RESERVED</h4>
</footer></body></html>
 

  