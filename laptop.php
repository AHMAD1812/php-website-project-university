<?php
session_start();
require_once("components.php");
$_SESSION['page']='laptop.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Product Nest-Laptop</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="product-nest.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: SoftLand - v2.2.1
  * Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile Menu ======= -->
  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <!-- ======= Header ======= -->
  <?php 
  $name=$_SESSION["First_Name"];
  if($name=="not")
  {
    nav_index();
  }
  else
  {
    nav_home($name);
  }
  ?>
  <main id="main">

    <!-- ======= Features Section ======= -->

    <section class="hero-section inner-page">
      <div class="wave">

        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
              <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
            </g>
          </g>
        </svg>

      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-7 text-center hero-text">
                <h1 data-aos="fade-up" data-aos-delay="">Laptop Products</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">You can Select latest Laptop Models here.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

   <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <div class="row justify-content-center text-center mb-5">
          <div class="col-md-4">
            <h2 class="section-heading">Catagories</h2>
          </div>
        </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-hp">Hp</li>
              <li data-filter=".filter-sumsung">Sumsung</li>
              <li data-filter=".filter-apple">MacBook</li>
              <li data-filter=".filter-dell">Dell</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <?php    
              $host="localhost:3308";
              $username="root";
              $password="";
              $database="product_web";

              $db = mysqli_connect($host,$username,$password,$database);
              if(!$db)
              {
                  echo "Connection failed";
              }
              else
              {
                  $sql="select * from `laptop`";
                  $result=mysqli_query($db,$sql);

                  if(mysqli_num_rows($result) > 0)
                  {
                    while($row=mysqli_fetch_array($result))
                    {
                        laptop_show($row['Id'],$row['Name'],$row['filter'],$row['Image']);
                    }
                  }
              }
            
            ?>
          
          </div>
    </section><!-- End Portfolio Section -->
    <!-- ======= Testimonials Section ======= -->
       <section class="section border-top border-bottom">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-4">
            <h2 class="section-heading">Review From Our Users</h2>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-md-7">
            <div class="owl-carousel testimonial-carousel">
              <div class="review text-center">
                <p class="stars">
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star muted"></span>
                </p>
                <h3>Excellent Website!</h3>
                <blockquote>
                  <p>This site definitely  appeals to the average person because the layout
is so  simple  but very  VERY  effective.  It is a clean  site  with a
flawless  look, and someone  without any  technical  background  would
definitely  appreciate  it.  The layout makes anyone feel  comfortable
because it is so well done and clean  looking.  You feel as if you are
in good hands and you know that you will be able to find  anything you
need on this site.
</p>
                </blockquote>

                <p class="review-user">
                  <img src="assets/img/person_1.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                  <span class="d-block">
                    <span class="text-black">Smith</span>, &mdash; Website User
                  </span>
                </p>

              </div>

              <div class="review text-center">
                <p class="stars">
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star muted"></span>
                </p>
                <h3>This Website is easy to use!</h3>
                <blockquote>
                  <p>It is easy to navigate  this site  because  all of the links are right
there on the left hand side, and people without image-loading browsers
can access the links via the text at the  bottom  which is very  handy
and essential  for a good site.  It is a good idea having a highlights
section  right in the middle of the screen  because it is obvious, and
all important information can be accessed by the reader easily.</p>
                </blockquote>

                <p class="review-user">
                  <img src="assets/img/person_2.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                  <span class="d-block">
                    <span class="text-black">Johan Alexender</span>, &mdash; Website User
                  </span>
                </p>

              </div>

              <div class="review text-center">
                <p class="stars">
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star muted"></span>
                </p>
                <h3>Awesome functionality!</h3>
                <blockquote>
                  <p>The load time of the page is quite  fast,  even with the  moving  link
buttons.  I did not find any typos or broken  links,  just  very  well
written  information!  There are  sufficient  meta tags on the  pages.
The  CharityFocus  logo is present on the main page but not on the sub
pages.  Overall a great site with not only great design but  excellent
content as well.  Great job to everyone involved.</p>
                </blockquote>

                <p class="review-user">
                  <img src="assets/img/person_3.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                  <span class="d-block">
                    <span class="text-black">Jean Thunberg</span>, &mdash; Website User
                  </span>
                </p>

              </div>
                
                <div class="review text-center">
                <p class="stars">
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                  <span class="icofont-star"></span>
                </p>
                <h3>Pitch-Perfect Design!</h3>
                <blockquote>
                  <p>The design is very  professional and well done.  I love the washed-out
image of the  globe on the left  behind  the  links.  The  site  feels
great.  I suggest  that you change the fonts to Arial, a more  rounded
font, to go with the professional feel of the site.  There are minimum
graphics,  and the  graphics  there are small  and  fast-loading.  The
colors of the images go together nicely.</p>
                </blockquote>

                <p class="review-user">
                  <img src="assets/img/person_4.jpeg" alt="Image" class="img-fluid rounded-circle mb-3">
                  <span class="d-block">
                    <span class="text-black">Clark</span>, &mdash; Website User
                  </span>
                </p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= CTA Section ======= --><!-- End CTA Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mb-4 mb-md-0">
          <h3>About Product Nest</h3>
          <p>Product Nest is a review giving website about Mobile and Laptops. Our mission is to make user know about all the specification of the product.</p>
          <p class="social">
            <a href="#"><span class="icofont-twitter"></span></a>
            <a href="#"><span class="icofont-facebook"></span></a>
            <a href="#"><span class="icofont-instagram"></span></a>
            <a href="#"><span class="icofont-linkedin"></span></a>
          </p>
        </div>
        <div class="col-md-8 ml-auto">
          <div class="row site-section pt-0">
            <div class="col-md-3 mb-4 mb-md-0">
              <h3>Navigation</h3>
              <ul class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Privacy Policiy</a></li>
                <li><a href="#">Terms of Use</a></li>
              </ul>
            </div>
            <div class="col-md-3 mb-4 mb-md-0">
              <h3>Products</h3>
              <ul class="list-unstyled">
                <li><a href="#">Mobiles</a></li>
                <li><a href="#">Laptops</a></li>
              </ul>
            </div>
            <div class="col-md-6 mb-6 mb-md-0 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>You can subscribe our Newsletter for remainder of new Products review.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
          </div>
        </div>
      </div>

    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
 <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
    <script src="assets/main.js"></script>
    <script>
      function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

// Close the full screen search box
function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}
   </script>
</body>

</html>