<?php

session_start();

if(isset($_SESSION['user1']))
{
	unset($_SESSION['user']);
	SESSION_destroy();
	header("location:login3.html");
}


?>