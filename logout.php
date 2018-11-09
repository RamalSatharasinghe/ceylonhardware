<?php

session_start();

if(isset($_SESSION['name']))
{
	unset($_SESSION['name']);
	SESSION_destroy();
	header("location:login.html");
}


?>