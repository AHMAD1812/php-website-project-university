<?php
 session_start();
require_once("components.php");
require_once("connection.php");
if(isset($_POST['news']))
{
    $email=$_POST['email'];
    $sql=mysqli_query($con,"SELECT * FROM `newsletter` where Email='$email'");
    if(mysqli_num_rows($sql)>0)
    {
        echo "<script>alert(You already subscribe for the newsletter)</script>";
    }
    else
    {
        $query="INSERT INTO `newsletter`(Email) VALUES ('$email')";
        $sql=mysqli_query($con,$query)or die("Could Not Perform the Query");
        echo "<script>alert(You have successfully subscribe for the newsletter)</script>";
    }
    header ("Location: index.php");
}
if(isset($_SESSION['ID']))
{
    $id=$_SESSION['ID'];
    $sql=mysqli_query($con,"SELECT count(product_id) as total FROM `wishlist` where user_id='$id'");
    $value=mysqli_fetch_assoc($sql);
    $count=$value['total'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Product Nest-Mobile</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="product-nest.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Template Main CSS File -->
  <style>
    <?php
include "assets/css/style.css";
include "style.css";

    ?>


.card {
  margin: auto;
  max-width: 950px;
  width: 90%;
  box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius: 1rem;
  border: transparent;
  margin-top:5%;
  margin-bottom:5%;
}

@media(max-width:767px) {
  .card {
      margin: 3vh auto
  }
}

.cart {
  background-color: #fff;
  padding: 4vh 5vh;
  border-bottom-left-radius: 1rem;
  border-top-left-radius: 1rem
}

@media(max-width:767px) {
  .cart {
      padding: 4vh;
      border-bottom-left-radius: unset;
      border-top-right-radius: 1rem
  }
}

.row {
  margin: 0
}

.title b {
  font-size: 1.5rem
}

.main {
  margin: 0;
  padding: 2vh 0;
  width: 100%
}

.col-2,
.col {
  padding: 0 1vh
}

a {
  padding: 0 1vh
}

.close {
  margin-left: auto;
  font-size: 0.7rem
}

img {
  width: 3.5rem
}

.back-to-shop {
  margin-top: 4.5rem
}

h5 {
  margin-top: 4vh
}

hr {
  margin-top: 1.25rem
}

form {
  padding: 2vh 0
}

select {
  border: 1px solid rgba(0, 0, 0, 0.137);
  padding: 1.5vh 1vh;
  margin-bottom: 4vh;
  outline: none;
  width: 100%;
  background-color: rgb(247, 247, 247)
}

input {
  border: 1px solid rgba(0, 0, 0, 0.137);
  padding: 1vh;
  margin-bottom: 4vh;
  outline: none;
  width: 100%;
  background-color: rgb(247, 247, 247)
}

input:focus::-webkit-input-placeholder {
  color: transparent
}

.btn {
  background-color: #000;
  border-color: #000;
  color: white;
  width: 100%;
  font-size: 0.7rem;
  margin-top: 4vh;
  padding: 1vh;
  border-radius: 0
}

.btn:focus {
  box-shadow: none;
  outline: none;
  box-shadow: none;
  color: white;
  -webkit-box-shadow: none;
  -webkit-user-select: none;
  transition: none
}

.btn:hover {
  color: white
}

a {
  color: black
}

a:hover {
  color: black;
  text-decoration: none
}

#code {
  background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253), rgba(255, 255, 255, 0.185)), url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
  background-repeat: no-repeat;
  background-position-x: 95%;
  background-position-y: center
}

  </style>
</head>

<body>

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
                <h1 data-aos="fade-up" data-aos-delay="">WISHLIST</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Products that you liked are here in your Wishlist.</p>
              </div>
            </div>
          </div>
        </div>
    </section>

   
  <section>
    <div class="card">
    <div class="row">
        <div class="col-md-12 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>WISHLIST</b></h4>
                    </div>
                    <div class="col align-self-center text-right text-muted"><?php echo $count?></div>
                </div>
            </div>
            <?php
                   $id=$_SESSION['ID'];
                    $sql=mysqli_query($con,"SELECT wishlist.user_id,wishlist.name,mobile_specification.os,mobile_specification.memory,mobile_specification.Price,mobile.image FROM mobile_specification INNER JOIN wishlist ON mobile_specification.p_id=wishlist.product_id INNER JOIN mobile ON mobile.Id=mobile_specification.p_id where wishlist.user_id='$id' AND wishlist.type='mobile'");
                    if(mysqli_num_rows($sql)>0)
                    {
                        while($row=mysqli_fetch_array($sql))
                        {
                            wish($row['user_id'],$row['name'],$row['os'],$row['memory'],$row['Price'],$row['image']);
                        }
                    }
                    $sql=mysqli_query($con,"SELECT wishlist.user_id,wishlist.name,laptop_specification.generation,laptop_specification.processor,laptop_specification.price,laptop.Image FROM laptop_specification INNER JOIN wishlist ON laptop_specification.p_id=wishlist.product_id INNER JOIN laptop ON laptop.Id=laptop_specification.p_id where wishlist.user_id='$id' AND wishlist.type='laptop'");
                    if(mysqli_num_rows($sql)>0)
                    {
                        while($row=mysqli_fetch_array($sql))
                        {
                            wish($row['user_id'],$row['name'],$row['generation'],$row['processor'],$row['price'],$row['Image']);
                        }
                    }
                    
                ?>
            <div class="back-to-shop"><a href="home.php">&leftarrow;<span class="text-muted">Back to shop</span></a></div>
        </div>
        
    </div>
</div>
</section>

    <!-- End Testimonials Section -->

    <!-- ======= CTA Section ======= --><!-- End CTA Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  footer();
  ?>

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