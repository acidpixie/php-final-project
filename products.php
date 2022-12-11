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
  
  <link rel="stylesheet" type="text/css" href="./css/styles.css">


  <title>Shop</title>
</head>

<body>

  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="products.php">Shop</a>
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
          </ul>
        </div>

      </div>
    </nav>
    <!-- Navbar -->

   <!-- Background image -->
    <div class="p-5 text-center bg-image" style="
      background-image: url('./images/headerImg2.jpg');
      height: 250px;
      margin-top: 58px;
    ">
      <div class="mask">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white">
            <h1 class="mb-3">Catalogue</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>

<div id="app"> 

  <div class="product-nav">
    <button type="button" class="btn btn-warning sort-btn">A-Z</button>
    <button type="button" class="btn btn-warning sort-btn">Price</button>
  </div>

  <div class="product-container">

    <div class="items" v-for="product in products">

      <div class="card p-2 m-2" style="width: 20rem;">
        <div class="img-hover-zoom">
        <img id="profile-img" src="./images/mito.jpg" width="302px" height="302px" data-original="./images/mito.jpg"/>
        </div>
        <div class="card-body">
          <h5 class="card-title"> {{ app.artist }} </h5>
          <p class="card-text"> {{ app.name }} </p>
          <p class="card-text"> {{ app.price }} </p>
          <p class="card-text"> {{ app.released }} </p>
        </div>
        <div class="card-footer">
          <small class="text-muted">
            <input type="number" name="quantity" value="">
            <input type="submit" class="btn btn-outline-dark btn-sm" name="purchase" value="add to cart">
          </small>
        </div>
      </div>

    </div>
  </div>

</div>

</body>


<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <p>Follow us on:</p>
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
          class="fa-brands fa-facebook-f"></i></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa-brands fa-twitter"></i></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
          class="fa-brands fa-instagram"></i></a>

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