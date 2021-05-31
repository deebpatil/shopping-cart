<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header id="header">
  <nav calss="navbar navbar-expand-lg navbar-dark bg-dark active " style="background:#1270db;">
 <button class="btn btn-primary"><a href="1xyz.php" class="navbar-brand ml-3 text-white" >
  <h3 >Home</h3>
  </a></button>
  
 <button class="btn btn-primary btn-space " > 
    <div class="mr-0"></div>
    <div class="navbar-nav">
      <a href="cart.php" class="nav-item nav-link active text-white">
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
  </nav>
</header>
</body>
</html>

