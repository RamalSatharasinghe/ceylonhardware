<?php
session_start();
require 'config.php';

?>
<!DOCTYPE html>
<html>
<head type="text/css"><link rel ="stylesheet" href="style1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  <title>Ceylon Hardware Company</title>
  <style>
  
#up{
	text-align:center;
	color:blue;}
#sign{
	
	width:320px;
	
	
	}
#block{
	width:1400px;
	height:800px;
	 
	}
	.I2{ display:block;
	  margin-bottom:25px;
	 width:100%;
	  border:2px solid steelblue;
	  
  }
  #I6{
	   width:344px;
	   height:45px;
	   border:none;
	   background:steelblue;
	   color:white;
  }
  
  
 
</style>
</head>
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
 
 <a href="signup.html"><img class="transparent"src="Images/signup.png" width="50px" height="50px" align="right"></a>
 
  <div id="search" align="right">
<input type="text" name="text" class="search" placeholder="Search here" >
<button class="submit" >&#128269 </button>
</div>
</br> </br>

 
 <div class="container" align="right">
 <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Hello <?php   echo "{$_SESSION['user']}";?> 
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="account.php">Account</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="checkcard.php">Card Details</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="signout.php?out='1'">Sign Out</a></li>
	  </ul>
  </div>
</div>
<?php
	if(!mysqli_select_db($conn,'ceylonhardware'))
	{
		echo'Data base not selected';
	}
	else{
		
		$ID5 = $_SESSION['ID'];
		$NAME2 = $_SESSION['user'];
		
		$sql="select * from signup where First_name='$NAME2 ' and Id ='$ID5 '";
		
		$result=mysqli_query($conn,$sql);
	
 if(mysqli_num_rows($result)>0)
		{
			$row = mysqli_fetch_assoc($result);?>
			<center>
<div id="block">
<h1 id="up">Change Password</h1></br>
<form id="sign" method="POST"  action="updatepassword.php" name="sign" >


<label>Enter New Password</label><br>
<input class="I2"type="password" name="password">

<label>Re-enter Password</label><br>
<input class="I2" type="password" name="confirm" >
<input id="I6" class="transparent"type="submit" name="submit" value="Submit" >
</form>
</div>
</center>
		<?php
		}} ?>
		
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

 
 
