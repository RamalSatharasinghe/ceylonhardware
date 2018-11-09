<?php

	require'config.php';
	
?>


<?php 

	if(!mysqli_select_db($conn,'ceylonhardware'))
	{
		echo 'Data base not selected';
		
	}
	
	$TITLE =$_POST['title'];
	
	$EMAIL =$_POST['email'];
	
	$REPLY =$_POST['reply'];
	
	$sql = ("INSERT INTO replypost(postTitle,email,reply) VALUES ('$TITLE','$EMAIL','$REPLY')");
	
	
	if(mysqli_query($conn,$sql)){
		
		echo 'Inserterd successfully';
		header("location:replypostdis.php"); 
	}
	else {
		
	die(mysqli_error($conn));
	
	}
	
	
	mysqli_close($conn);
	
	
	?>
	
	