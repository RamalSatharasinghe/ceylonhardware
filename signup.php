<?php //Linking the configuration file
require 'config.php';
?>

<?php



	if(!mysqli_select_db($conn,'ceylonhardware'))
	{
		echo'Data base not selected';
	}
	
	
		
		$FIRST = $_POST['firstname'];
		$SECOND = $_POST['secondname'];
		$PASSWORD = $_POST['password'];
		$CONPASSWORD = $_POST['confirm'];
		$EMAIL = $_POST['email'];
		$CONTACT = $_POST['number'];
		$ADDRESS = $_POST['address'];
		$OCCUPATION = $_POST['occupation'];
		
		$sql = "INSERT INTO signup (First_name,Second_name,Password,Confirm_password,Email,Contact_number,Address,Occupation) VALUES ('$FIRST','$SECOND','$PASSWORD','$CONPASSWORD','$EMAIL','$CONTACT','$ADDRESS ','$OCCUPATION')";
	
	 if(mysqli_query($conn,$sql)){
  header("location:login2.html");
    }
    else{
	die(mysqli_error($conn));
      //echo "Error:". $conn->error;
    }
	
	//header("url=js4.html");
	
	
	mysqli_close($conn);
	
	
	?>
	
	