<?php
session_start();
require 'config.php';


if(!mysqli_select_db($conn,'ceylonhardware'))
	{
		echo'Data base not selected';
	}
	$ID4 = $_SESSION['ID'];
	
	$sql="select * from cardetails where id='$ID4' ";
	$result=mysqli_query($conn,$sql);
		
 if(mysqli_num_rows($result)>0){
	 $row = mysqli_fetch_assoc($result);
	$card1 = $row['card_id'];
	$_SESSION['card'] = $card1;
	
	
	if(isset($_SESSION['card'])){
	
	
	
	 
	header("location:showcard.php");
	 
	
 }}
else{
	
	header("location:cardetails.php");

 }
?>
<?php
	mysqli_close($conn);
	
	?>