<?php 

	require 'config.php';
	?>
<?php


	if(!mysqli_select_db($conn,'ceylonhardware'))
	{
		echo'Data base not selected';
	}
	
	$NAME = $_POST['name'];
	
	$CODE = $_POST['pro'];
	
	$EMAIL = $_POST['email'];
	
	$CONTACTNO = $_POST['cno'];
	
	$DESCRIPTION = $_POST['reqdetails'];
	
	$sql = "INSERT INTO requirement1 (Name,Product_code,Email,Contact_num,Description) VALUES ('$NAME','$CODE','$EMAIL','$CONTACTNO','$DESCRIPTION ')";
	
	if(mysqli_query($conn,$sql)){
      echo 'Inserted successfully';
	  
	  header("location:requirement1.html");
    }
    else{
	die(mysqli_error($conn));
      //echo "Error:". $conn->error;
    }
	

	
	
	mysqli_close($conn);
	
	?>
	