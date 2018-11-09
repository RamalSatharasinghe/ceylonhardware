<?php //Linking the configuration file
session_start();
require 'config.php';
?>

<?php
if(!mysqli_select_db($conn,'ceylonhardware'))
	{
		echo'Data base not selected';
	}
	
	$CARDNUM = $_POST['cardnum'];
	$CODE = $_POST['cod'];
	$EXPIRE = $_POST['exp'];
	$ID2 = $_SESSION['ID'];
	
	$sql = "INSERT INTO cardetails (id,card_id, code, Expire_date) VALUES ('$ID2','$CARDNUM ','$CODE','$EXPIRE')";
	
	
	 if(mysqli_query($conn,$sql)){
       
	header("location:showcard.php");
	 
    }
    else{
	die(mysqli_error($conn));
      //echo "Error:". $conn->error;
    }
	
	//header("url=js4.html");
	
	
	mysqli_close($conn);
	
	
	?>
	