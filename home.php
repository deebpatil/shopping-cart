<?php

session_start();

?>

<html>
<head>
<title>Home page</title>

 <?php

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
		echo  '<script>window.location="home1.php"</script>';
		}
		else
		{
		echo '<script>alert(" Already Added to Cart")</script>';
		echo  '<script>window.location="home1.php"</script>';
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
		echo '<script>window.location="home.php"</script>';
		}
	  }
	}
}

?>
<head>
	<title>Cart</title>
	  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	  <link href="https:fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script" rel="stylesheet">
</head>

<body>

<h2 style="text-align:center;color:#000066;">Welcome "<?php echo $_SESSION['username']; ?>"</h2>

<div class="container-fluid" style="background-color:#000099;color:white">
  <div class="container font-bold text-center p-2">
    SHOPPING SITE
  </div>
</div>

<header id="header">
  <nav calss="navbar navbar-expand-lg navbar-dark bg-dark active " style="background:#1270db;">
 <button class="btn btn-primary"><a href="home1.php" class="navbar-brand ml-3 text-white" >
  <h3 >Home</h3>
  </a></button>
  
 <button class="btn btn-primary btn-space " > 
    <div class="mr-0"></div>
    <div class="navbar-nav">
      <a href="home1.php" class="nav-item nav-link active text-white">
         <h5 class="px-5 cart"><i class="fa fa-shopping-cart"></i> Cart <?php 
       if(isset($_SESSION['cart'])){
            $count= count($_SESSION['cart']);
            echo "<span>$count</span>";
         }else{
            echo "<span>0</span>";
         }
         ?> </h5>
       </a>
    </div>
  </div></button> 
 <button class="btn btn-primary"><a href="logout.php" class="navbar-brand ml-3 text-white" >
  <h5 >LOGOUT</h5>
  </a></button>
  </nav>
</header>

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
				 <td><a href="home.php?action=delete&id=<?php echo $values['p_id'];?>"><span class="btn btn-danger">Remove</span></a></td>
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
</div></div><br>  
<hr><br>
<?php
require_once("address.php");
?>

<br><br>
<div class="container-fluid text-center" style="background:black;text:black;">
MY SHOPPING CART
 </div>
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
	