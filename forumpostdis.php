<?php
session_start();
	require 'config.php';
	
	?>
	
	
<?php

	if(!mysqli_select_db($conn,'ceylonhardware'))
	{
		
		echo'database not selected';
		
	}
	
	$sql  = ("SELECT *  FROM forumpost");
	
	
	$result = mysqli_query($conn,$sql);
	
	
	
	if($result){
		
		
		
		$table ='<table>';
		$table .='<tr><th>Name </th> <th>Email </th> <th>Title</th> <th>Description </th> </tr>';
		
		while($record = mysqli_fetch_assoc($result)){
			
			$table .='<tr>';
			
			$table .='<td>' .$record['Name']. '</td>';
			
			$table .='<td>' .$record['Email']. '</td>';
			
			$table .='<td>' .$record['Title']. '</td>';
			
			$table .='<td>' .$record['Description']. '</td>';
			
			
			
			$table .='</tr>';
			
			
			
		}
		
		$table .= '</table>';
		
		

	
	}
	
	
	
	?>
	
	
	<!DOCTYPE html>
	
	<html>
	
	<head type="text/css"><link rel ="stylesheet" href="style1.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	
	<style>
	
		table{
				border-collapse:collapse;
				width:100%;
				color:#4CAF50;
				font-family:monospace;
				font-size:25px;
				text-align:left;
				
				
		}
		
		th{
			background-color:#4CAF50;
			color:white;
			padding:10px;
		}
		
		tr:nth-child(even)
			{background-color: #b7acac}
			
		td{
			color:black;
			padding:10px;
		}
		
		
			
		</style>
	</head>
	
	<body  background="Images/wb1.jpg">
	
	
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
 
<div align="right"><a href="login2.html"><button type="button" class="btn btn-primary">Login</button>
</a>
 <a href="signup.html"><img class="transparent"src="Images/signup.png" width="50px" height="50px" ></a></div>
 
  

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
  <h1 id="forum"><strong>Forum</strong><br><br>
 </h1>
 
 <a href="forumpost.html"><input type="submit" value="New" ></a><br><br>
	<center><?php echo $table; ?></center><br><br>
	<center> <a href="replypost.html"> <input id="pd" type="submit" value="Reply to Post "> </a> </center>
	<br><br><br>
	
	
	
	<br><br><br>
	
	
	
	
	
	
	<a href="#"><img class="transparent"src="Images/fb.png" height="50px" width="50px" align="right"></a>
	<a href="#"><img class="transparent"src="Images/twitter.jpg" height="50px" width="50px" align="right"></a>

	<a href="#"><img class="transparent"src="Images/google.png" height="50px" width="50px" align="right"></a>

	<a href="#"><img class="transparent"src="Images/intagram.jpg" height="50px" width="50px" align="right"></a>
	<a href="https://www.youtube.com/"><img class="transparent"src="Images/youtube.png" height="50px" width="50px" align="right"></a>



	<footer><h4>2018 Ceylon Hardware Company,INC.ALL RIGHT RESERVED</h4>
	</footer>
	
	</body>
	
	
	
	
	
	
	
	</html>
	
	
	<?php mysqli_close($conn); ?>
	
	