<?php
session_start();
require 'config.php';

$username1=$_POST['username'];
$password1=$_POST['password'];


	if(!mysqli_select_db($conn,'ceylonhardware'))
	{
		echo'Data base not selected';
	}
	else{
		if(isset($_POST['submit'])){
		$sql="select * from signup where First_name='$username1' and Password ='$password1'";
		
		$result=mysqli_query($conn,$sql);
	
 if(mysqli_num_rows($result)>0)
		{
			$row = mysqli_fetch_assoc($result);
			
			$name = $row['First_name'];
			$id = $row['Id'];
			$_SESSION['user1'] =$name;
			$_SESSION['ID'] = $id;
			header("location:admin.php");
			
		}
	
			else{
				
			header("location:login3.html");
			
		}
	}}
	
	mysqli_close($conn);
	?>