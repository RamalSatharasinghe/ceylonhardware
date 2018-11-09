<?php

	require 'config.php';
	
	?>
	
	
<?php

	if(!mysqli_select_db($conn,'ceylonhardware'))
	{
		
		echo 'data base not selected';
		
	}
	
	$NAME   	=$_POST['yourname'];
	
	$EMAIL 		=$_POST['email1'];
	
	$NO    		=$_POST['phone'];
	
	$SUBJECT 	=$_POST['subject'];
	
	$MSG 		=$_POST['message'];
	
	
	$sql = ("INSERT INTO contact(name,email,phoneNo,subject,massage) VALUES('$NAME','$EMAIL','$NO','$SUBJECT','$MSG')");
	
	
	
	if(mysqli_query($conn,$sql))
	{
		echo 'inserted successfully';
		header("location:contact.html");
	}
	
	else
	{
		die(mysqli_error($conn));
		
	}
		
	mysqli_close($conn);

	?>
	
	
	
