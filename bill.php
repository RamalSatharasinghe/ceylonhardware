<?php
session_start();
$connect=mysqli_connect("localhost","root","","ceylonhardware");
if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id=array_column($_SESSION["shopping_cart"],"item_id");
		if(!in_array($_GET["id"],$item_array_id))
		{
			$count=count($_SESSION["shopping_cart"]);
			$item_array=array(
				'item_id'	=>$_GET["id"],
				'item_name'	=>$_POST["hidden_name"],
				'item_price'	=>$_POST["hidden_price"],
				'item_quantity'	=>$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count]=$item_array;
		}
		else
		{	
			echo'<script>alert("Item Already Added")</script>';
			echo'<script>window.location="laptops.php"</script>';
		}
	}
	else
	{
		$item_array=array(
			'item_id'	=>$_GET["id"],
			'item_name'	=>$_POST["hidden_name"],
			'item_price'	=>$_POST["hidden_price"],
			'item_quantity'	=>$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0]=$item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"]=="delete")
	{
		foreach($_SESSION["shopping_cart"]as $keys=>$values)
		{
			if($values["item_id"]== $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo'<script>alert("Item Removed")</script>';
				echo'<script>window.location="bill.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>
<head type="text/css"><link rel ="stylesheet" href="style1.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<style>
.vade{
	padding-left:380px;
	display:flex;
	align-items:center;
}</style></head>


<title>Ceylon Hardware Company</title>

<body background="Images/wb1.jpg">
<header id="t1"><a href="page1.html"><img  href="page1.html"src="Images/L1.jpg"></a>Ceylon Hardware Company

 
 

 </header>
 <div class="dropdown">
 <a href="page1.html"><button class="active">Home</button></a>
 </div>
<div class="dropdown">
  <button class="active">Services</button>
	 <div class="dropdown-content">
    <a href="requirement1.html">Get Support</a>
    <a href="login.html">Forum</a>
  </div>
  </div>
  
  <div class="dropdown">
  <button class="active">Products</button>
	<div class="dropdown-content">
  <a href="laptops.html">Desktop</a>
   <a href="laptops.html">Laptop</a>
    <a href="#">Tools</a>
 </div>
 </div>
 <div class="dropdown">
 <a href="aboutus.html"><button class="active">About Us</button></a>
 </div>
<div class="dropdown">
 <a href="contact.html"><button class="active">Contact Us</button></a>
 </div>
 
 <a href="signup.html"><img class="transparent"src="Images/signup.png" width="50px" height="50px" align="right"></a>
 
  <div id="search" align="right">
<input type="text" name="text" class="search" placeholder="Search here" >
<button class="submit" >&#128269 </button>
</div>
</br> </br>









<?php

if(!empty($_SESSION["shopping_cart"]))
{
	?>
	<div style="padding-left:500px">
	<table  border="4" height="250PX"width="500px"><tr> <th>Product </th>  <th> Quantity </th> <th> Price </th> <th> Total </th>  <th> Remove </th> </tr>
	<?php
	$total=0;
	
	
	
	foreach($_SESSION["shopping_cart"] as $keys=> $values)
	{
		?>
		<tr>
		<?php
		echo"<td>";echo $values["item_name"]; echo"<br><br>";echo"</td>";
		echo"<td>";echo $values["item_quantity"]; echo"<br><br>";echo"</td>";
		echo"<td>";echo $values["item_price"];echo"<br><br>";echo"</td>";
		echo"<td>";echo number_format($values["item_quantity"] * $values["item_price"],2);  echo"<br><br>"; echo"</td>"; ?>
		<td><a href="bill.php?action=delete&id=<?php echo $values["item_id"];?>"><span><button type="button" width="120px" height="10px"style="background-color:red;color:black;">Remove</button></span></a></td>
		<?php
		$total=$total+($values["item_quantity"]* $values["item_price"]);
		
	}
	
	echo"<td>";echo"<h6>Grand Total<h6> <br>";echo number_format($total,2);echo"</td>";
}	echo"</tr>"
?>
	</table></div>
	
	<div class="lastoption">
	<a href="laptops.php"><button type="button" class="btn btn-primary" style="position:absolute;left:0px;bottom=1000px;">Back</button></a>
	<a href="login2.html"><button type="button" class="btn btn-primary" style="position:absolute;right:0px;bottom=1000px;">Purchase</button></a><br><br><br><br>
	</div>
	<br><br><br>

<a href="#"><img class="transparent"src="Images/fb.png" height="50px" width="50px" align="right"></a>
<a href="#"><img class="transparent"src="Images/twitter.jpg" height="50px" width="50px" align="right"></a>

<a href="#"><img class="transparent"src="Images/google.png" height="50px" width="50px" align="right"></a>

<a href="#"><img class="transparent"src="Images/intagram.jpg" height="50px" width="50px" align="right"></a>
<a href="https://www.youtube.com/"><img class="transparent"src="Images/youtube.png" height="50px" width="50px" align="right"></a>






<footer><h4>2018 Ceylon Hardware Company,INC.ALL RIGHT RESERVED</h4>
</footer></body></html>