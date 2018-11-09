<?php 
require 'config.php';
?>

<?php

	if(!mysqli_select_db($conn,'ceylonhardware'))
	{
		echo'Data base not selected';
	}
	
	
		
		$FIRST = $_POST['firstname'];
		$LAST = $_POST['lastname'];
		$PASSWORD = $_POST['password'];
		$REPASSWORD = $_POST['reenter'];
		$DISTRICT = $_POST['district'];
		
		
		$sql = "INSERT INTO forum_details (firstname,lastname,password,Reenterpassword,district) VALUES ('$FIRST','$LAST','$PASSWORD','$REPASSWORD','$DISTRICT')";
	
	 if(mysqli_query($conn,$sql)){
     
	  header('Location: login.html');
    }
    else{
	die(mysqli_error($conn));
      //echo "Error:". $conn->error;
    }
	
	
	
	
	mysqli_close($conn);
	
	
?>
	
	