<?php 
session_start();

$product_id = $_GET['productid'];

require_once __DIR__ . "/./src/database.php";
require_once __DIR__ . "/./src/cart.functions.php";

$conn = dbconnect();

if(isset($_POST['productid'])){
  $product_id = $_POST['productid'];
}

if(isset($product_id)) {
  
  if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();

    $_SESSION['total_items'] = 0;
    $_SESSION['total_price'] = '0.00';
  }

if(!isset($_SESSION['cart'][$product_id])){
  $_SESSION['cart'][$product_id] = 1;
} elseif(isset($_POST['cart'])){
  $_SESSION['cart'][$product_id]++;
  unset($_POST);
}

}
//if save is selected, update quantity

if(isset($_POST['save_change'])){
  foreach($_SESSION['cart'] as $id =>$qty){
    if($_POST[$id] == '0'){
      unset($_SESSION['cart']["$id"]);
    } else {
      $_SESSION['cart']["$id"] = $_POST["$id"];
    }
  }
}

if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))){
  $_SESSION['total_price'] = total_price($_SESSION['cart']);
  $_SESSION['total_items'] = total_items($_SESSION['cart']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!-- Latest compiled and minified CSS -->
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/9034ff5f85.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="./css/styles.css"/>

  <title>Shopping Cart</title>
</head>

<body>

  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.php">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="cart.php">Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
              <!--this needs to change from login to logout once member is logged in-->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup.php">Sign-up</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>
    <!-- Navbar -->
  
    <!-- Background image -->
    <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('./images/headerImg2.jpg');
      height: 250px;
      margin-top: 58px;
    "
  >
      <div class="mask">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white">
            <h1 class="mb-3">Shopping Cart</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>

  <form action="cart.php" method="post">
	   	<table class="table">
	   		<tr>
	   			<th>Item</th>
	   			<th>Price</th>
	  			<th>Quantity</th>
	   			<th>Total</th>
	   		</tr>
	   		    
			<tr>
      <?php
      foreach($_SESSION['cart'] as $id => $qty){
        $conn = dbconnect();
        $album = mysqli_fetch_assoc(getProductId($conn, $id)); ?>
				<td><?php echo $album['name'] . " by " . $album['artist']; ?></td>
				<td><?php echo "R" . $album['price']; ?></td> 
				<td><input type="text" value="<?php echo $qty; ?>" album="<?php echo $id; ?>"></td>
				<td><?php echo "R" . $qty * $album['price']; ?></td>
			</tr>
			<?php } ?>
		    <tr>
		    	<th>&nbsp;</th>
		    	<th>&nbsp;</th>
		    	<th><?php echo $_SESSION['total_items']; ?></th>
		    	<th><?php echo "R" . $_SESSION['total_price']; ?></th>
		    </tr>
	   	</table>
		  <!-- <button type="submit" class="btn btn-warning" name="save_change">Save Changes</button> -->


  <div>
	<a href="checkout.php" class="btn btn-warning">Checkout</a> 
	<a href="products.php" class="btn btn-warning">Continue Shopping</a>
  </div>
	  
	</form>

  <?php
	} else {

    $title = "Your cart is empty!";
    require_once "./templates/header.php";

    echo "<p>Go back to <a href=\"products.php\">Shop</a></p>";

	}
  ?>




</body>


<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <p>Follow us on:</p>
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/nikita.bahadur" target="_blank" role="button"><i class="fa-brands fa-facebook-f"></i></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/nix.xie/" target="_blank" role="button"><i class="fa-brands fa-instagram"></i></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/n3o_z0n3" target="_blank" role="button"><i class="fa-brands fa-twitter"></i></a>

    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
  </div>
  <!-- Copyright -->
</footer>

<?php	 
	if(isset($conn)){ mysqli_close($conn); } 
?>

</html>