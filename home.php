<?php
    session_start();
    
    $_SESSION['page']='home.php';
    include "connection.php";
    $Id=$_SESSION['ID'];
    $sql=mysqli_query($con,"SELECT * FROM `user_infromation` where `id`='$Id'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {  
        $_SESSION['img'] =$row['image'];
    }
    else
    {
      $_SESSION['img'] ='u1.png';
    }
    require_once("components.php");
?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Product Nest</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="product-nest.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Template Main CSS File -->
 <style>
   <?php
   include "assets/css/style.css";
  //  include "style.css";
   ?>
 </style>
</head>

<body>

 <?php

 $name=$_SESSION["First_Name"];
 if($name=="")
 {
   nav_index();
 }
 else
 {
   nav_home($name);
 }
 ?>

  <!-- ======= Hero Section ======= -->
  <section class="hero-section" id="hero">

    <div class="wave">

      <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
          </g>
        </g>
      </svg>

    </div>

    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 hero-text-image">
          <div class="row">
            <div class="col-lg-7 text-center text-lg-left">
              <h1 data-aos="fade-right">Latest Reviews with Product Nest</h1>
              <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Get Latest Reviews about Mobile and Laptop on Product Nest.</p>
              <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="#" class="btn btn-outline-white">Get started</a></p>
            </div>
            <div class="col-lg-5 iphone-wrap">
              <img src="assets/img/iphone_6.svg" alt="Image" class="phone-1" data-aos="fade-right">
              <img src="assets/img/phone_3.png" alt="Image" class="phone-2" data-aos="fade-right" data-aos-delay="200">
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Home Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">20</span>
              <p>Users Visited Today</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">200</span>
              <p>Product Reviews Avaliable</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">24/7</span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">2</span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <section class="section">

      <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade">
          <div class="col-md-6 mb-5">
            <img src="assets/img/undraw_svg_1.svg" alt="Image" class="img-fluid">
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="step">
              <span class="number">01</span>
              <h3>Search By Mobile Model</h3>
              <p>If you want to find the Review of a particular Mobile Model you can Search it by its Model Name.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="step">
              <span class="number">02</span>
              <h3>Enjoy the Review</h3>
              <p>You can see the Specification of the Mobile that include its camera, memory and other main specs of the Mobile.</p>
            </div>
            </div>
        </div>
      </div>

    </section>
      
      
    <section class="section">

      <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade">
          <div class="col-md-6 mb-5">
            <img src="assets/img/undraw_svg_2.svg" alt="Image" class="img-fluid">
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="step">
              <span class="number">01</span>
              <h3>Search By Laptop Model</h3>
              <p>If you want to find the Review of a particular Laptop Model you can Search it by its Model Name.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="step">
              <span class="number">02</span>
              <h3>Enjoy the Review of laptops</h3>
              <p>You can see the Specification of the laptop that include its processor, graphis card, memory and other main specs of the Laptop.</p>
            </div>
            </div>
        </div>
      </div>

    </section>
<

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
    </section><!-- End Testimonials Section -->

<section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-4">
            <h2 class="section-heading">Our Team</h2>
          </div>
            <div class="section-p">
            <p></p>
            </div>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch box1">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/team-1.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ahmad Imran</h4>
                <h4>Roll no: Bcsm-f19-277</h4>
              </div>
            </div>
          </div>


          <div class="col-lg-3 col-md-6 d-flex align-items-stretch box1">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/team/team-3.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Faizan Munsaf</h4>
                <h4>Roll no: Bcsm-f19-257</h4>
              </div>
            </div>
            </div>

        </div>

      </div>
    </section><!-- End Team Section -->
  </main><!-- End #main -->
<hr>
    
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
          
          <div class="row justify-content-center text-center mb-5">
        <div class="col-md-4">
          <h2 class="section-heading">Contact</h2>
        </div>
          </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <span class="iconify" data-icon="bx-bx-map" data-inline="false"></span>
                  <h3>Our Address</h3>
                  <p>Lahore Pakistan</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <span class="iconify" data-icon="fluent:mail-copy-20-filled" data-inline="false"></span>
                  <h3>Email Us</h3>
                  <p>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <span class="iconify" data-icon="clarity:mobile-phone-solid" data-inline="false"></span>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="addcontact.php" method="post" >
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="Name" class="form-control" id="name" placeholder="Your Name" required/>
                  
                </div>
                
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="Email" id="subject" placeholder="Your Email" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
                
              </div>
              <div class="text-center"><button type="submit" class="btn btn-primary" tabIndex="-1" name="send">Send message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    
    
  <!-- ======= Footer ======= -->
  <?php footer()?>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
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