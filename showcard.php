<?php 

session_start();
require 'config.php';

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
 
 <?php

	if(!mysqli_select_db($conn,'ceylonhardware'))
	{
		echo'Data base not selected';
	}
	else{
		$ID3 = $_SESSION['ID'];
		$sql="select * from cardetails where Id='$ID3' ";
		
		$result=mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($result) > 0)
		{
			
			?>
			<?php		
			while($row = mysqli_fetch_assoc($result)){
				?>
				
	</br>	
				<div class="container">
  <strong><h2> Card Details</h2></strong></br></br>
 
  <form class="form-inline" action="">
    <div class="form-group">
      <label for="fname">Card Number:</label>
      <input type="text" class="form-control" id="number" value="<?php echo $row['card_id'];?>" disabled>
    </div>
    
	</br></br></br>
	 <div class="form-group">
      <label for="district">Code:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <input type="text" class="form-control" id="code" value="<?php echo $row['code'];?>" disabled>
    
    </div></br></br></br>
	 <div class="form-group">
      <label for="lname">Expire Date:</label>
      <input type="text" class="form-control" id="address" value="<?php echo $row['Expire_date'];?>"disabled>
    </div>
	
  </form>
</div>
				
				
				
		<?php
	}}}
			?>
			
			
			<br><br>
<center>
			<div class="container">
  
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Pay</button>

  
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Payment Confirmed</h4>
        </div>
        <div class="modal-body">
          <p></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
</center>
<br><br><br><br><br><br><br><br><br><br><br><br>

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
			
			