<?php
session_start();
require 'config.php';
?>

<?php

	if(!mysqli_select_db($conn,'ceylonhardware'))
	{
		echo'Data base not selected';
	}
	
	else{
		$ID2 = $_SESSION['Id'];
		$sql="select * from forum_details where Id='$ID2' ";
		
		$result1=mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($result1) > 0)
		
		{
			$row1 = mysqli_fetch_assoc($result1);?>
			
			
			
			
				
		<!DOCTYPE html>
<html>
<head type="text/css"><link rel ="stylesheet" href="style1.css">
<meta charset="utf-8">
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
 
</br> </br>
  
 <div class="container" align="right">
 <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Hello <?php   echo "{$_SESSION['name']}";?> 
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="forumacc.php">Account</a></li>
   
    	  <li role="presentation"><a role="menuitem" tabindex="-1" href="forumedit.php">Edit Profile</a></li>
  <li role="presentation"><a role="menuitem" tabindex="-1" href="logout.php?out='1'">Sign Out</a></li>	
	</ul>
  </div>
</div>
<a href="forumpostdis.php"><button type="button" class="btn btn-primary" >back</button></a><br>
<div class="container">
  <strong><h2>Edit Forum Account Details</h2></strong></br></br>
 
  <form class="form-inline" action="updateforum.php" method="POST">
    <div class="form-group">
      <label for="fname">First Name</label>
      <input type="text" class="form-control"  value="<?php echo $row1['firstname'];?>" name="fname">
    </div>
    <div class="form-group">
      <label for="lname">Last Name:</label>
      <input type="text" class="form-control"value="<?php echo $row1['lastname'];?>" name="lname">
    </div>
	</br></br>
	<div class="form-group">
      <label for="password">Passowrd:</label>
      <input type="password" class="form-control" value="<?php echo $row1['password'];?>" name="password">
    </div>
	<div class="form-group">
      <label for="password">Reenter-Passowrd:</label>
      <input type="password" class="form-control"  value="<?php echo $row1['Reenterpassword'];?>" name="confirm">
    </div>
	</br></br>
	 <div class="form-group">
      <label for="district">District:</label>
      <input type="text" class="form-control" value="<?php echo $row1['district'];?>" name="district">
    </div>
     <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

<a href="#"><img class="transparent"src="Images/fb.png" height="50px" width="50px" align="right"></a>
<a href="#"><img class="transparent"src="Images/twitter.jpg" height="50px" width="50px" align="right"></a>

<a href="#"><img class="transparent"src="Images/google.png" height="50px" width="50px" align="right"></a>

<a href="#"><img class="transparent"src="Images/intagram.jpg" height="50px" width="50px" align="right"></a>
<a href="https://www.youtube.com/"><img class="transparent"src="Images/youtube.png" height="50px" width="50px" align="right"></a>






<footer><h4>2018 Ceylon Hardware Company,INC.ALL RIGHT RESERVED</h4>
</footer></body></html>
<?php
	}}
?>