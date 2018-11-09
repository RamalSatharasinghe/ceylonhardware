<?php //Linking the configuration file
require 'config.php';
session_start(); 

		$USERNAME = $_POST['username'];
		$PASSWORD = $_POST['password'];

	if(!mysqli_select_db($conn,'ceylonhardware'))
	{
		echo'Data base not selected';
	}
	
	else{
		
		if(isset($_POST['submit'])){
		
		$sql="select * from forum_details  where firstname='$USERNAME' and Password ='$PASSWORD'";
		
		$result=mysqli_query($conn,$sql);
		
		
		if(mysqli_num_rows($result) > 0){
	
		$row=mysqli_fetch_assoc($result);
		 
		 $name1 = $row['firstname'];
		$Id1 = $row['Id'];
		 $_SESSION['name'] = $name1;
		 $_SESSION['Id'] = $Id1;
		 
	header('Location: checksession.php');
	
    }
	else{
				
			header("location:login.html");
			
	}}}
		
	
	 
    
	
?>