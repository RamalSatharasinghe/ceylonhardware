<?php
session_start();


if(isset($_SESSION['name'])){
	
	header("location:forumpostdis.php");
	
	
}
else{
	
	header("location:login.html");
}

?>


