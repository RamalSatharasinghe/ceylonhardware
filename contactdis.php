<?php

	require'config.php'
	
?>

<?php
 
	if(!mysqli_select_db($conn,'ceylonhardware'))
	{
		
		echo'database not selected';
		
	}
	
	$sql = ("SELECT * FROM contact ");
	
	
	$result = mysqli_query($conn,$sql);
	
	if($result){
		
		$table ='<table>';
		
		$table .='<tr> <th> Name  </th> <th> Email   </th> <th> PhoneNo </th> <th> Subject </th> <th> Massage  </th></tr>';
		
		while($record = mysqli_fetch_assoc($result)){
			
			$table .='<tr>';
			
			$table .='<td>' .$record['name']. '</td>';
			
			$table .='<td>' .$record['email']. '</td>';
			
			$table .='<td>' .$record['phoneNo']. '</td>';
			
			$table .='<td>' .$record['subject']. '</td>';
			
			$table .='<td>' .$record['massage']. '</td>';
			
			$table .='</tr>';
			
			
		}

			$table .='</table>';
			
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
		
		
		
		#h{
			
			font-family:Impact, Charcoal, sans-serif;
			
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
 
 <a href="signup.html"><img class="transparent"src="Images/signup.png" width="50px" height="50px" align="right"></a>
 
  

</br> </br>
	
	<a href="admin.php"><button type="button" class="btn btn-primary" >Back</button></a></br> </br>
	
	
	<center><?php echo $table; ?></center>  <br><br><br> 
	
	
	
	
	
	
	
	
	
	
	<br><br><br><br><br><br><br><br><br>
	
	
	
	
	
	
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
	