<?php
session_start();
require 'config.php';

$ID7 = $_SESSION['Id'];
$FNAME = $_POST['fname'];
$LNAME = $_POST['lname'];
$PASSWORD = $_POST['password'];
$CONPASSWORD = $_POST['confirm'];
$DISTRICT = $_POST['district'];


if(!mysqli_select_db($conn,'ceylonhardware'))
	{
		echo'Data base not selected';
	}
	else{
		$query = "UPDATE forum_details set firstname = '$FNAME', lastname = '$LNAME',password = '$PASSWORD ', Reenterpassword= '$CONPASSWORD', district = '$DISTRICT' where  Id = $ID7";
$result_set = mysqli_query($conn,$query);
			
			if($result_set){
				
				header("location:forumacc.php");
			}
			
			else{
				echo"Database query failed.";
				
							}
	}							
?>