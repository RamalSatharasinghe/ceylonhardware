<?php

session_start();

if(isset($_SESSION['user']))
{
	unset($_SESSION['user']);
	SESSION_destroy();
	header("location:login2.html");
}


?>