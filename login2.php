<?php
session_start();
require 'config.php';

$username=$_POST['username'];
$password=$_POST['password'];


	if(!mysqli_select_db($conn,'ceylonhardware'))
	{
		echo'Data base not selected';
	}
	else{
		if(isset($_POST['submit'])){
		$sql="select * from signup where First_name='$username' and Password ='$password'";
		
		$result=mysqli_query($conn,$sql);
	
 if(mysqli_num_rows($result)>0)
		{
			$row = mysqli_fetch_assoc($result);
			
			$name = $row['First_name'];
			$id = $row['Id'];
			$_SESSION['user'] =$name;
			$_SESSION['ID'] = $id;
			header("location:card.php");
			
		}
	
			else{
				
			header("location:login2.html");
			
		}
	}}
	
	mysqli_close($conn);
	?>