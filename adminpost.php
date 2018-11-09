<?php

	require 'config.php';
	
	?>
	
<?php	
	if(!mysqli_select_db($conn,'ceylonhardware'))
	{
		
		echo 'Data base not selected';
	}
	
	$TITLE       = $_POST['title'];
	$DESCRIPTION = $_POST['description'];
	
	
	$sql = ("INSERT INTO msgadmin (Title,Description) VALUES ('$TITLE','$DESCRIPTION')");
	
	
	if(mysqli_query($conn,$sql)){
		
		echo 'Inserterd successfully';
	}
	
	else {
		
		die(mysqli_error($conn));
	}
	
	mysqli_close($conn);
	
	?>
	
	
	