<?php
session_start();
require 'config.php';

$ID7 = $_SESSION['ID'];
$PASSWORD = $_POST['password'];
$CONPASSWORD = $_POST['confirm'];


if(!mysqli_select_db($conn,'ceylonhardware'))
	{
		echo'Data base not selected';
	}
	else{
		$query = "UPDATE signup set Password = '$PASSWORD ', Confirm_password = '$CONPASSWORD' where  Id = $ID7";
$result_set = mysqli_query($conn,$query);
			
			if($result_set){
				
				header("location:account.php");
			}
			
			else{
				echo"Database query failed.";
				
							}
	}							
?>