<?php
session_start();
if(isset($_POST["add"]))
{
	if(isset($_SESSION["cart"]))
	{
		$item_array_id= array_column($_SESSION["cart"],'p_id');
		if(!in_array($_POST["pid"], $item_array_id))
		{
		$count = count($_SESSION["cart"]);
		$item_array = array(
	'p_id' =>$_POST["pid"],
	'p_name'=>$_POST["pname"],
	'p_price'=>$_POST["pprice"],
	'p_image'=>$_POST['pimage']
		);
		$_SESSION["cart"][$count] = $item_array;
		echo  '<script>window.location="1xyz.php"</script>';
		}
		else
		{
		echo '<script>alert(" Already Added to Cart")</script>';
		echo  '<script>window.location="1xyz.php"</script>';
		}
	}
	else
	{

		$item_array = array(
		'p_id'=>$_POST["pid"],
		'p_name'=>	$_POST["pname"],
		'p_price'=>	$_POST["pprice"],
		'p_image'=>$_POST['pimage']
		);
		$_SESSION["cart"][0] = $item_array;
	
	}
}
 
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["cart"] as $keys => $values)
		{
		if($values["p_id"] == $_GET["id"])
		{
		unset($_SESSION["cart"][$keys]);
		echo '<script>alert(" Removed")</script>';
		echo '<script>window.location="cart.php"</script>';
		}
	  }
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	  <link href="https:fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container-fluid" style="background-color:#000099;color:white">
  <div class="container font-bold text-center p-2">
    SHOPPING SITE
  </div>
</div>

<?php require_once("navbar.php");
?>

<div class="container">
    <h2 class="text-center">Cart</h2>
	<div class="table-responsive">
	   <table class="table table-bordered">
	      <tr style="background:lightblue;">
		      <th width="15%">Product Name</th>
			  <th width="45%">Image</th>
			  <th width="20%">Price</th>
			  <th width="15%">Total</th>
			  <th width="5%">Action</th>
		  </tr>
		      <?php
			  if(!empty($_SESSION['cart']))
			  {
				  $total=0;
				  foreach($_SESSION['cart'] as $keys => $values)
				  {
			  ?>
            <tr>
			     <td><?php echo $values['p_name'];?></td>
				 <td><img src="<?php echo
					 $values['p_image'];  ?>" alt="image" class="img-fluid mb-2" ></td>
				 <td><?php echo $values['p_price'];?></td>
				 <td><?php echo $values['p_name'];?></td>
				 <td><a href="cart.php?action=delete&id=<?php echo $values['p_id'];?>"><span class="btn btn-danger">Remove</span></a></td>
			</tr>
            <?php
			 $total +=( $values['p_price']);
				  }
				  ?>
			<tr>
			    <td colspan="3" align="right">Total</td>
				<td align="right">&#8377;<?php echo number_format($total,2);?></td>
			</tr>
			
	   </table>
	</div>
	<?php } ?>
</div><br>  
<hr><br>
	<div class="container">
    <h2 class="text-center">Proceed to Payment</h2>
	<div class="table-responsive">
	   <table class="table table-bordered">
	 
	<td colspan="4" align="center"><button type="submit" name="sub2" class="btn btn-success btn-lg"><a href="reg.php" class="text-white">Login/ Signin</a></button><br>
	 <p>Already User/New User</p>
	</td>
	</tr>
	</table>

</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
	