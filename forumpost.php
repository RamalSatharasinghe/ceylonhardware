<?php

	require 'config.php';
	
	?>
	
	
<?php

	if(!mysqli_select_db($conn,'ceylonhardware'))
	{
		
		echo 'data base not selected';
		
	}
	
	
	$NAME     		=$_POST['name'];
	$EMAIL    		=$_POST['email'];
	
	$TITLE 	  		=$_POST['title'];
	$DESCRIPTION 	=$_POST['description'];


 	$sql   = ("INSERT into forumpost(Name,Email,Title,Description) VALUES ('$NAME','$EMAIL','$TITLE','$DESCRIPTION')");
	
	if(mysqli_query($conn,$sql))
	{
		echo 'inserted successfully';
		header("location:forumpostdis.php");
	}
	
	else
	{
		die(mysqli_error($conn));
		
	}
		
	mysqli_close($conn);

	?>
	
	
	
		