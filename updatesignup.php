<?php
session_start();
require 'config.php';

$ID6 = $_SESSION['ID'];

		
		$FIRST = $_POST['firstname'];
		$SECOND = $_POST['secondname'];
		$EMAIL = $_POST['email'];
		$CONTACT = $_POST['number'];
		$ADDRESS = $_POST['address'];
		$OCCUPATION = $_POST['occupation'];

	if(!mysqli_select_db($conn,'ceylonhardware'))
	{
		echo'Data base not selected';
	}
	else{

			
			$query = "UPDATE signup set First_name = '$FIRST', Second_name = '$SECOND',Email = '$EMAIL',Contact_number = '$CONTACT' ,Address = '$ADDRESS',Occupation = '$OCCUPATION' where Id = $ID6";
			
			$result_set = mysqli_query($conn,$query);
			
			if($result_set){
				
				header("location:account.php");
			}
			
			else{
				echo"Database query failed.";
				
							}
	}							
?>