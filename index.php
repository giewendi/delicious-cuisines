<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Delicious Cuisines</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Delicious - v4.9.1
    * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body>
<div class="wrapper">
        <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Sat: 11:00 AM - 23:00 PM</span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="index.html">Delicious</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.html">Home</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="index.php" class="book-a-table-btn scrollto active">Restaurants</a>

    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Delicious</span> Cuisines</h2>
                <p class="animate__animated animate__fadeInUp">This is a list of almost all restaurants in New York City.</p>
                <br><br><br><h3 class="animate__animated animate__fadeInDown" style="color:white;">Scroll Down</h3>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Choose your favorite!</h2>
                <p class="animate__animated animate__fadeInUp">Each boroughs contains different types of cuisine that can satisfy you cravings.</p>
                <br><br><br><h3 class="animate__animated animate__fadeInDown" style="color:white;">Scroll Down</h3>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Rated for you</h2>
                <p class="animate__animated animate__fadeInUp">Each restaurants are graded by its food quality, service, and overall ambiance of the place.</p>
                <br><br><br><h3 class="animate__animated animate__fadeInDown" style="color:white;">Scroll Down</h3>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

            <div style="margin-left: 10px;">
                <div class="col-md-12">
                    <div class="mt-4 mb-3 clearfix">
                        <form action="" method="post">
                            <b>Keyword Search:</b> <input type="text" name="keyword" placeholder="Enter a Keyword"></input> <input type="submit" class="btn btn-primary" name="filter" value="Filter"></input><br/></br>
                            <p style="margin: -1em 0 1.2em 1em; color: #808080; font-style: italic">You can search by Name or Cuisine</p>
                            <input type="submit" class="btn btn-info" name="all" value="All"></input>
                            <input type="submit" class="btn btn-info" name="brooklyn" value="Brooklyn"></input>
                            <input type="submit" class="btn btn-secondary" name="queens" value="Queens"></input>
                            <input type="submit" class="btn btn-success" name="manhattan" value="Manhattan"></input>
                            <input type="submit" class="btn btn-danger" name="bronx" value="Bronx"></input>
                            <input type="submit" class="btn btn-warning" name="staten" value="Staten Island"></input>
                        </form>
                        </div>
                    <?php 
                        include "database.php";
                        include "filter.php";
                        // iterate cursor to display name
                        echo '<table class="table table-bordered table-striped" style="width: 99%">';
                                    echo "<thead>";
                                        echo "<tr>";
                                            echo "<th>ID</th>";
                                            echo "<th>Name</th>";
                                            echo "<th>Cuisine</th>";
                                            echo "<th>Address</th>";
                                            echo "<th>Borough</th>";
                                            echo "<th>Grades</th>";
                                        echo "</tr>";
                                    echo "</thead>";
                                    echo "<tbody>";
                            foreach ($cursor as $document) {
                                echo "<tr>";
                                    echo "<td>" . $document["restaurant_id"] . "</td>";
                                    echo "<td>" . $document["name"] . "</td>";
                                    echo "<td>" . $document["cuisine"] . "</td>";
                                    echo "<td>";
                                        echo $document["address"]["building"]. ", ";
                                        echo $document["address"]["street"]. ", ";
                                        echo $document["address"]["zipcode"];
                                    echo "</td>";
                                    echo "<td>" . $document["borough"] . "</td>";
                                    echo "<td>";
                                        $grades = count($document['grades']);
                                        for ($counter = 0; $counter < $grades ; $counter++) { 
                                            echo $counter . ": " . $document["grades"][$counter]["grade"]. " = ".  $document["grades"][$counter]["score"]. "<br>";
                                        }
                                    echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";                            
                        echo "</table>";
                    ?>
                </div>
            </div>        
        </div>

    <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Delicious</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Delicious</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>