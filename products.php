<?php

$count = 0;

$product_id = $_GET['product_id'];

include __DIR__ . "/./src/database.php";

session_start();
$conn = dbconnect();

$query = "SELECT * FROM products WHERE product_id = '$product_id'";
$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);
if (!$result){
  echo "Error retrieving data " . mysqli_error($conn);
  exit;
}



//sort functions
if(isset($_POST['title'])){
  if(isset($_POST['asc'])){
    $query = "SELECT * FROM products order by name asc";

  }
  else if(isset($_POST['desc'])){
    $query = "SELECT * FROM products order by name desc";
  }else{
    $query = "SELECT * FROM products";
  }
}

  $result = mysqli_query($conn, $query);

  if(isset($_POST['price'])){
    if(isset($_POST['asc'])){
      $query = "SELECT * FROM products order by price asc";

    }
    else if(isset($_POST['desc'])){
      $query = "SELECT * FROM products order by price desc";
    }else{
      $query = "SELECT * FROM products";
    }
  }

  //$result = mysqli_query($conn, $query);

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

  <title>Home Page</title>
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
              <a class="nav-link" href="cart.php">Cart</a>
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
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white">
            <h1 class="mb-3">Catalogue</h1>
            <h4></h4>
            <p>Free Shipping on all Orders over R700 in SA</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>

  
<div class="sort-nav">
  <form method="post" action="products.php">
  <div class="radio">
    <label class="text"><input class="text" type="radio" name="asc" >Ascending</label>
  </div>
  <div class="radio">
    <label class="text"><input class="text" type="radio" name="desc">Descending</label>
  </div>

  <button type="submit" class="btn btn-warning" name="title">Title</button>
  <button type="submit" class="btn btn-warning" name="price">Price</button>
  </form>
</div>

        <div class="product-container">

          <div class="items">
          <?php for ($i = 0; $i < mysqli_num_rows($result); $i++) { ?>
          <?php while ($query_row = mysqli_fetch_assoc($result)) { ?>
            <div class="card p-2 m-2" style="width: 20rem;">
              <div class="img-hover-zoom">
                <img id="profile-img" src="<?php echo $query_row['image']; ?>" width="302px" height="302px" data-original="./images/mito.jpg" />
              </div>
              <div class="card-body">
                <h5 class="card-title"> <?php echo $query_row['artist']; ?> </h5>
                <p class="card-text"> <?php echo $query_row['name']; ?> </p>
                <p class="card-text">R <?php echo $query_row['price']; ?> </p>
                <p class="card-text"> <?php echo $query_row['released']; ?> </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">
                <form method="post" action="cart.php">
            <input type="hidden" name="productid" value="<?php echo $query_row['product_id']?>">
            <input type="submit" value="Add to Cart" name="cart" class="btn btn-warning">
                </form>
                </small>
              </div>
            </div>
          <?php
          $count++;
          if ($count >= 3) {
            $count = 0;
          }
        } ?>
        <?php
      }
      if (isset($conn)) {
        mysqli_close($conn);
      }
        ?>
          </div>
        </div>



</body>

<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <p>Follow us on:</p>
    <!-- Section: Social media -->
    <section class="mb-4">
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


</html>