<?php

session_start();

if(isset($_SESSION['user'])){
	//Logged USER
	
	 
	header("location:account.php");
	 
	
}
else{
	//horen apu ekek
	header("location:login2.html");
}

	
	?>


