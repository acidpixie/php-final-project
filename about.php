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
  <link rel="stylesheet" type="text/css" href="./css/styles.css" />

  <title>About Us</title>
</head>

<body>

  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
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
              <a class="nav-link" aria-current="page" href="about.php">About</a>
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
    <div class="p-5 text-center bg-image" style="
        background-image: url('./images/headerImg2.jpg');
        height: 250px;
        margin-top: 58px;
      ">
      <div class="mask">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white">
            <h1 class="mb-3">About Us</h1>
            <p>We're passionate about music and we aspire to make music more readily available and at an affordable price.
              With the emergence of digital streaming platforms like Spotify, Youtube Music and iTunes getting your hands on one of your favourite artists has become harder and so much more expensive.
              That's why we have decided to start up our very own Kpop store in South Africa, Discover the Beat with us.
              We offer nationwide delivery to all suburbs. Follow us on social media for the latest news and offers!
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>


  <section>

    <div class="about-content">



      <h5>Contact Us:</h5>
      <p>Tel: 011 123 4567</p>
      <p>Email: hello@kstore.co.za</p>

      <h5>Visit us:</h5>


      <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Mall%20Offices,%2011%20Cradock%20Ave,%20Rosebank,%20Johannesburg,%202196+(Kstore)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">distance maps</a></iframe></div>


      <div class="team">

        <h4>Meet the Team Behind the Beat!</h4>

        <div class="card-group">
          <div class="card">
            <img class="card-img-top" src="./images/rae.jpg" width="300px" height="400px" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Raeghar</h5>
              <p class="card-text">Head of Marketing and Sales. Works too hard, can never seem to get him off the laptop.</p>
              <p class="card-text"><small class="text-muted">Work Hard, Play Hard</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="./images/theo.jpg" width="300px" height="400px" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Theodore</h5>
              <p class="card-text">Head of Product. Always out looking for the latest release. He's just a vibe.</p>
              <p class="card-text"><small class="text-muted">All in a Days Work</small></p>
            </div>
          </div>
        </div>



      </div>
    </div>
  </section>



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