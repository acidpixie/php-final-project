<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">

  <!-- Latest compiled and minified CSS -->
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/9034ff5f85.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="./css/styles.css"/>

  <title>Login</title>
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
              <a class="nav-link" aria-current="page" href="login.php">Login</a>
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
    <div
      class="p-5 text-center bg-image"
      style="
        background-image: url('./images/headerImg.jpg');
        height: 400px;
        margin-top: 58px;
      "
    >
      <div class="mask">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white">
            <h1 class="mb-3">Login Form</h1>
            <div class="login-container">
              <div class="row">
                  <div class="col-md-12 form-group">
                      <input type="text" class="form-control" name="email" placeholder="Email Address">
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12 form-group">
                      <input type="password" name="password" placeholder="Enter your Password" class="form-control">
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12 form-group">
                      <input type="submit" name="login" class="btn btn-block btn-login" placeholder="Enter your Password" >
                  </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                    <p>Not a member, <a href="signup.php">Sign-up!</a></p>
                </div>
            </div>
              </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>



</body>


<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <p>Follow us on:</p>
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa-brands fa-facebook-f"></i></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa-brands fa-twitter"></i></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa-brands fa-instagram"></i></a>

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