<?php
$server="localhost";
$user_name="root";
$password="";
$database="ceylonhardware";

$conn= mysqli_connect($server,$user_name,$password,$database);
//$conn = mysqli_connect("localhost","root","","timetable");

if($conn->connect_error){

die("Connection Failed : " . $conn->connect_error);
}

?>