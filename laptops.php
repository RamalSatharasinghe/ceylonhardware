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
			echo'<script>alert("Item Added")</script>';
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
				echo'<script>window.location="laptops.php"</script>';
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
	<!-- SEARCH BUTTON -->
	<form action="laptops.php" method="POST">
	<input type="text" name="searchtext" class="search" placeholder="Search here" >
	<button type="submit" name="search" value="Find">&#128269 </button>
	</form>
	<!-- SEARCH BUTTON END -->
<!--</div>
  <div id="search" align="right">
<input type="text" name="text" class="search" placeholder="Search here" >
<button class="submit" >&#128269 </button>
</div>
</br> </br>-->



<div class="vade">
	<?php
	
	//$myqry="SELECT * FROM laptop_products ORDER BY code ASC";
    //$result=mysqli_query($connect,$myqry);
	
	//Search content
	$myqry="SELECT * FROM laptop_products ORDER BY code ASC";
	if(isset($_POST['search']))
	{
		$searchId=$_POST['searchtext'];
		$myqry="SELECT * FROM laptop_products WHERE NAME LIKE '%$searchId%' ORDER BY code ASC";
	}else
	{	
		$myqry="SELECT * FROM laptop_products ORDER BY code ASC";
    }
	//---------
	
	$result=mysqli_query($connect,$myqry);
	echo "<table>";
	if(mysqli_num_rows($result)>0)
	{
		while($row = mysqli_fetch_array($result))
		{ 
		?>
			<tr>
			<form method="post" action="laptops.php?action=add&id=<?php echo $row["code"];?>">    
	 
			<td> <img src="<?php  echo $row["IMAGES"];?>" height="300px" width="350px"><?php echo"</td>";
			echo"<td>";echo$row ["NAME"];echo"<br><br>";echo$row ["DESCRIPTION"];echo"<br><br>";echo$row["PRICE"];echo"<br><br>";?>
			<input type="text"  name="quantity" min="1"  max="50" step="1"/> <?php echo"<br><br>";?>
			<input type="hidden"  name="hidden_name" value="<?php echo$row ["NAME"]; ?>"/> 
			<input type="hidden"  name="hidden_price" value="<?php echo$row ["PRICE"]; ?>"/>  
			
			<input type="submit" name="add_to_cart" value="Add to Cart"/>
			<img src="images/cart.jpg"  height="50px" width="50px"> </td>
			</form>
			</tr>
		<?php	
		}
		echo"</table>";
	}	?>
	
	
  
 </div>

 <div>
	<a href="bill.php"><button type="button" class="btn btn-primary" style="position:absolute;right:0px;bottom=1000px;">Confirm Order</button></a><br><br><br><br>
    
	</div>
  

</br></br>




	

<a href="#"><img class="transparent"src="Images/fb.png" height="50px" width="50px" align="right"></a>
<a href="#"><img class="transparent"src="Images/twitter.jpg" height="50px" width="50px" align="right"></a>

<a href="#"><img class="transparent"src="Images/google.png" height="50px" width="50px" align="right"></a>

<a href="#"><img class="transparent"src="Images/intagram.jpg" height="50px" width="50px" align="right"></a>
<a href="https://www.youtube.com/"><img class="transparent"src="Images/youtube.png" height="50px" width="50px" align="right"></a>






<footer><h4>2018 Ceylon Hardware Company,INC.ALL RIGHT RESERVED</h4>
</footer></body></html>