<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Program</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="./assets/img/logo2.png" rel="icon">
  <link href="./assets/img/logo2.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="style2.css">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="main" href="index.html">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
 
  <style>
   .img_p{ width:80px;
           height: 80px;
         }
  </style>


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">LinoopTek</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="logdash.php">Home</a></li>
          <li><a class="nav-link scrollto" href="logdash.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="logdash.php#services">Services</a></li>
          <li><a class="nav-link scrollto" href="logdash.php#team">Team</a></li>
          <li><a id="pro" class="nav-link scrollto" href="dash.php">DashBoard</a></li>
       
          <!-- <li><a class="getstarted scrollto" href="./index.html">Log Out</a></li> -->
          <li class="dropdown"><a href="#"><span>User Profile</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="" ><img class="img_p" class="img-fluid"   src="images1/<?php echo $_SESSION['user']['imgpath']; ?>" alt="profile pic"  /></a></li>
              <li><a href="#"><?php echo $_SESSION['user']['name']; ?></a></li>
              <li><a href="#"><?php echo $_SESSION['user']['mail']; ?></a></li>
              <li><a href="./logout.php">Log Out</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="logdash.html">Home</a></li>
          <li>Dash</li>
        </ol>
        <h2>Dash</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        
          <div id="row1" class="row">
            <div  class="col-6">
              You have been registered for this course. On site classes will start from 14th of june. <br>
              thank you!
            </div>
            <div  class="col-6">
                You can join our Webinar session. <br> <br>
            <a href="https://zoom.us/webinar" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Webinar</a>
            </div>
             
             
             
          </div>
        
      </div>
    </section>

  </main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-newsletter">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          
          
        </div>
      </div>
    </div>
  </div>

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>LinoopTek</h3>
          <p>
            Jada <br>
            Jhelum<br>
            Pakistan <br><br>
            <strong>Phone:</strong> +923180569033<br>
            <strong>Email:</strong> hamzabdr36@gmail.com<br>
          </p>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="index.html#about">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="index.html#services">Services</a></li>

          </ul>
        </div>

    

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Social Networks</h4>
          <p>Follow Us for Updates</p>
          <div class="social-links mt-3">
         
            <a href="https://www.facebook.com/hamzabdr36" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/hamzabdr.1/" class="instagram"><i class="bx bxl-instagram"></i></a>
       
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container footer-bottom clearfix">
    <div class="copyright">
      &copy; Copyright <strong><span>Hamza</span></strong>. All Rights Reserved
    </div>
\
  </div>
</footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>