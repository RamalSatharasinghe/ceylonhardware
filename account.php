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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script></head>
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

 <div class="container">

 <div align="right">
   <img class="transparent"src="Images/profilepic.png" width="100px" height="100px" align="right" alt="profile"><br><br><br><br><br><br>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" >Upload</button>
  </div>


  
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Profile Picture</h4>
		  <form action="profilepic.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

		  
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
		$ID1 = $_SESSION['ID'];
		$sql="select * from signup where Id='$ID1' ";
		
		$result=mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($result) > 0)
			
		{
			
			?>
			<?php		
			while($row = mysqli_fetch_assoc($result)){
				?>
				
				<div class="container">
  <strong><h2> Account Details</h2></strong></br></br>
 
  <form class="form-inline" action="">
    <div class="form-group">
      <label for="fname">First Name</label>
      <input type="text" class="form-control" id="fname" value="<?php echo $row['First_name'];?>" disabled>
    </div>&nbsp&nbsp&nbsp&nbsp
    <div class="form-group">
      <label for="lname">Last Name:</label>
      <input type="text" class="form-control" id="lname" value="<?php echo $row['Second_name'];?>"disabled>
    </div>
	</br></br>
	 <div class="form-group">
      <label for="district">Email:</label>
      <input type="text" class="form-control" id="email" value="<?php echo $row['Email'];?>" disabled>
    </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <div class="form-group">
      <label for="lname">Contact Number:</label>
      <input type="text" class="form-control" id="number" value="<?php echo $row['Contact_number'];?>"disabled>
    </div></br></br>
	 <div class="form-group">
      <label for="lname">Address:</label>
      <input type="text" class="form-control" id="address" value="<?php echo $row['Address'];?>"disabled>
    </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<div class="form-group">
      <label for="lname">Occupation:</label>
      <input type="text" class="form-control" id="occupation" value="<?php echo $row['Occupation'];?>"disabled>
    </div>
	
	
  </form>
</div>
			
			

			<?php
	}}}
			?>
			<br><br><br>
			
<center><a href="editsignup.php"><button type="button" class="btn btn-primary" >Edit</button></a></center><br><br>
<center><a href="editpassword.php"><button type="button" class="btn btn-primary" >Change Password</button></a></center>
<br><br><br><br><br><br><br><br><br><br><br><br><br>

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