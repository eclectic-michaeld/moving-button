<?php



 ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>cv-generator</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.12.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>cvGenerator</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Sample CV</a></li>

          <li><a class="getstarted scrollto" href="login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Generate your CV here</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">signup below to start generate your cv </h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="signup.php" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="overlay overlay-gradient col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img style="-webkit-filter: contrast(60%); filter:contrast(60%)" class="img-fluid" src="assets/img/home_cv.jpg"  alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>sample cv</h2>
        <p>Check below different sample CV</p>
      </header>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Student cv</li>
            <li data-filter=".filter-card">Graduate CV</li>
            <li data-filter=".filter-web">Job Application CV</li>
          </ul>
        </div>
      </div>

      <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/student cv 1.webp" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Student cv</h4>
              <p>sample 1</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/student cv 1.webp" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Student cv"><i class="bi bi-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/job application cv 1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Job Application cv </h4>
              <p>sample 1</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/job application cv 1.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Job Application cv"><i class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/student cv 2.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Student cv</h4>
              <p>sample 2</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/student cv 2.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Student cv"><i class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/graduate cv 1.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Graduate cv</h4>
              <p>sample 1</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/graduate cv 1.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Graduate cv"><i class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/job application cv 2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Job Application cv</h4>
              <p>sample 2</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/job application cv 2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Job Application cv"><i class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/student cv 3.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Student cv</h4>
              <p>sample 3</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/student cv 3.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Student cv"><i class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/graduate cv 2.webp" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Graduate cv</h4>
              <p>sample 2</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/graduate cv 2.webp" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Graduate cv"><i class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/graduate cv 3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Graduate cv</h4>
              <p>sample 3</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/graduate cv 3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Graduate cv"><i class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/job application cv 3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Job Application cv</h4>
              <p>sample 3</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/job application cv 3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Job Application cv"><i class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </section><!-- End Portfolio Section -->


<!-- footer section -->
  <footer id="footer" class="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>cvg</span>
            </a>
            <p>You can visit us in our socila media at</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>


          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">System Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">ICT consultation</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">CCTV camera Istalation services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic and Logo Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Simu , street <br>
              Dar es salaam, Rita Tower<br>
              Tanzania <br><br>
              <strong>Phone:</strong> +255 628 738 264<br>
              <strong>Email:</strong> info@gnasptechltd.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>gnasptechltd</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
                Designed by <a href="https://gnasptechltd.com/">gnasptechltd~team</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
