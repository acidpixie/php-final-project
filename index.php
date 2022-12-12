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
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup.php">Sign-up</a>
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
            <h1 class="mb-3">Discover the Beat</h1>
            <h4></h4>
            <p>Free Shipping on all Orders over R700 in SA</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>

  <div class="home-container">

  <div>
    <h4>Coming Soon:</h4>
  </div>
  <div class="product-container2">

    <div class="items2">

      <div class="card p-2 m-2" style="width: 20rem;">
      <div class="img-hover-zoom">
        <img id="profile-img" src='./images/phantom.png' width="302px" height="302px"/>
      </div>
        <div class="card-body">
          <h5 class="card-title"> WayV </h5>
          <p class="card-text"> Phantom </p>
        </div>
        <div class="card-footer">
          <small class="text-muted">
            Released on 01 Jan 2023
          </small>
        </div>
      </div>

    </div>

    <div class="items2">

      <div class="card p-2 m-2" style="width: 20rem;">
      <div class="img-hover-zoom">
        <img id="profile-img" src='./images/chase.png' width="302px" height="302px"/>
      </div>
        <div class="card-body">
          <h5 class="card-title"> Minho </h5>
          <p class="card-text"> Chase </p>
        </div>
        <div class="card-footer">
          <small class="text-muted">
            Released on 30 Dec 2022
          </small>
        </div>
      </div>

    </div>

    <div class="items2">

      <div class="card p-2 m-2" style="width: 20rem;">
      <div class="img-hover-zoom">
        <img id="profile-img" src='./images/forgive.jpg' width="302px" height="302px"/>
      </div>
        <div class="card-body">
          <h5 class="card-title"> BOA </h5>
          <p class="card-text"> Forgive Me </p>
        </div>
        <div class="card-footer">
          <small class="text-muted">
            Released on 21 Dec 2022
          </small>
        </div>
      </div>

    </div>
  </div>


  <div>
    <h4>Best Sellers:</h4>
  </div>
  <div class="product-container2">

    <div class="items2">

      <div class="card p-2 m-2" style="width: 20rem;">
        <img src='./images/jackinthebox.png'/>
        <div class="card-body">
          <h5 class="card-title"> J-Hope </h5>
          <p class="card-text"> Jack in the Box </p>
          <p class="card-text"> 210 Sold </p>
          <p class="card-text"> Released Date: 15/07/2022 </p>
        </div>
        <div class="card-footer">
          <small class="text-muted">
            <a href="products.php" class="btn btn-outline-dark btn-sm">Shop</a> 
          </small>
        </div>
      </div>

    </div>

    <div class="items2">

      <div class="card p-2 m-2" style="width: 20rem;">
        <img src='./images/oddinary.png'/>
        <div class="card-body">
          <h5 class="card-title"> Stray Kids </h5>
          <p class="card-text"> Oodinary </p>
          <p class="card-text"> 108 Sold </p>
          <p class="card-text"> Released Date: 18/03/2022 </p>
        </div>
        <div class="card-footer">
          <small class="text-muted">
            <a href="products.php" class="btn btn-outline-dark btn-sm">Shop</a> 
          </small>
        </div>
      </div>

    </div>

    <div class="items2">

      <div class="card p-2 m-2" style="width: 20rem;">
        <img src='./images/universe.jpg'/>
        <div class="card-body">
          <h5 class="card-title"> NCT </h5>
          <p class="card-text"> Universe </p>
          <p class="card-text"> 98 Sold </p>
          <p class="card-text"> Released Date: 14/12/2021 </p>
        </div>
        <div class="card-footer">
          <small class="text-muted">
            <a href="products.php" class="btn btn-outline-dark btn-sm">Shop</a> 
          </small>
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