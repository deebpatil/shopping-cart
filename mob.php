<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	  <link href="https:fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script" rel="stylesheet">
</head>

<body>
<div class="container-fluid" style="background-color:#000099;color:white">
  <div class="container font-bold text-center p-2">
    SHOPPING SITE
  </div>
</div>

<?php
session_start();
 require_once("navbar.php")?>


<div class="container-fluid">
 <div class="row">
    <div class="col-sm-2" style="background:black;text:white;text-align:center;padding:3px;text:justify;">
      <h3 style="font-weight:bold;z-index:2;">Categories</h3>
      <p><a href="lap.php" class="text-white p-4">Laptops</a><br></p>
      <p> <a href="tab.php" class="text-white">Tablets</a><br></p>
      <p> <a href="mob.php" class="text-white">Mobiles</a><br></p>
      <p><a href="hdpn.php" class="text-white">Headphones</a><br></p>
      <p> <a href="lap.php" class="text-white">Laptops</a><br></p>
    </div>
    <div class="col-sm-10">
	<h1 class="text-center text-info mb-3 ml-5" 
	style="font-family: 'Abril Fatface';"> SHOPPING CART</h1>
     <div class="row">
	<?PHP

	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'shoppingcart');

	


	$query = "  SELECT `id`,`name`, `pcode`,`image`, `price`,`discount` ,`cat` FROM `product` order by id ASC ";

	$queryfire = mysqli_query($con, $query);

	$num = mysqli_num_rows($queryfire);
	

	if($num > 0){
		while($product = mysqli_fetch_array($queryfire)){
      if($product['cat']=='mob')
      {
      ?>	
		<div class="col-lg-3 col-md-3 col-sm-12">
			
			<form  action="cart.php" method="post">
                                                                                                                                
				<div class="card">
					<h6 class="card-title bg-info text-white p-2 text-uppercase text-center"> <?php echo
					 $product['name'];  ?>   </h6>

					<div class="card-body">
						 <img src="<?php echo
					 $product['image'];  ?>" alt="phone" class="img-fluid mb-2" >

					 <h6 class="ml-5"> &#8377; <?php echo $product['price'];  ?><span> (<?php echo $product['discount'];  ?>% off) </span> </h6> 

					 <h6 class="badge badge-info ml-5"> 4.4 <i class="fa fa-star"> </i> </h6>

					 
					 <input type="hidden" name="pid"  value="<?php echo $product['id'] ; ?>">
                      <input type="hidden" name="pname"  value="<?php echo $product['name'] ; ?>">
                     <input type="hidden" name="pprice"  value="<?php echo $product['price'] ; ?>">
                    <input type="hidden" name="pimage"  value="<?php echo $product['image'] ; ?>">
					</div>

				
					<div class="container mb-2">
						<button  type="submit" name="add" class="btn btn-success ml-5 "> Add to cart<i class="fa fa-shopping-cart"></i> 
                    </div><br>
						
				</div><br><br>
			</form>
    

		</div>


  <?php	
      }	
		}
	}
	?>
</div>
 



<div class="container-fluid" style="background:black;text:black;">
MY SHOPPING CART
 </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>