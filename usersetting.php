<?php
 session_start();
 include "connection.php";
require_once("components.php");
$_SESSION['page']='usersetting.php';
$Id=$_SESSION['ID'];
    $sql="SELECT * from `user_infromation` where `id`=$Id;";
    $result=mysqli_query($con,$sql);

    if(mysqli_num_rows($result) > 0)
    {
      while($row=mysqli_fetch_array($result))
    {
      $name=$row['First Name'];
      $email=$row['Email'];
      $img=$row['image'];
      $aboutme=$row['About'];
      $stre=$row['street'];
      $city=$row['city'];
      $stat=$row['state'];
      $zipc=$row['zip code'];
    }
    }
    else{
      $name=$_SESSION['First_Name'];
      $email=$_SESSION['Email'];
      $img='u1.png';
      $aboutme="";
      $stre="";
      $city="";
      $stat="";
      $zipc="";
    }

        $_SESSION['img'] =$img;
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
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
<style>

.user-name,.user-email{
    text-align:center; padding-top:5px; color: #274685;
}
.user-avatar{
    margin-left:0px;
    padding-left:0px;
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #2e323c;
}

.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}


.file-upload-wrapper{
  position:relative;
  width:100%;
  height:40px;
  cursor: pointer;
}
 
.file-upload-wrapper::after{
  content:attr(data-text);
  font-size: 18px;
  position:absolute;
  top:0;
  left:0;
  background:#fff;
  padding:10px 15px;
  display: block;
  width:calc(100% - 40px);
  pointer-events:none;
  z-index: 20;
  height:60px;
  line-height: 40px;
  color:#000;
  border: 1px solid #ccc;
  border-radius: 5px 10px 10px 5px;
  font-weight: 300;
}

.file-upload-wrapper::before{
  content:"Upload";
  position:absolute;
  top:0;
  right:0;
  display: inline-block;
  height:60px;
  background: -webkit-linear-gradient(to right, #24C6DC, #514A9D);
  background: linear-gradient(to right, #24C6DC, #514A9D);
  color:#fff;
  font-weight: 700;
  z-index: 25;
  font-size: 16px;
  line-height: 60px;
  padding:0 15px;
  text-transform: uppercase;
  pointer-events: none;
  border-radius: 0 5px 5px 0;
  transition: 0.5s ease-in-out;
}

.file-upload-wrapper:hover::before{
  background: -webkit-linear-gradient(to right, #514A9D, #24C6DC);
  background: linear-gradient(to right, #514A9D, #24C6DC);
}
.file-upload-wrapper input{
  opacity: 0;
  position:absolute;
  top:0;
  right:0;
  bottom:0;
  left:0;
  z-index: 99;
  height:40px;
  margin:0;
  padding:0;
  display:block;
  cursor: pointer;
  width:50px;
} 
  </style>
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
                <h1 data-aos="fade-up" data-aos-delay="">Edit Profile Settings</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">You can Add, Update information to help you find mush better products.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

   <section style="margin-left:20px; margin-right:20px;">
   <div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img src="user_pic/<?php echo $img?>" alt="Maxwell Admin">
				</div>
				<h5 class="user-name" style=""><?php echo $name;?></h5>
				<h6 class="user-email"><?php echo $email?></h6>
			</div>
			<div class="about">
				<h5>About</h5>
				<p><?php echo $aboutme?></p>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
    <form action="adduserinfo.php" method="post" enctype="multipart/form-data">
		<div class="row gutters">
       
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">Personal Details</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="fullName">Full Name</label>
					<input type="text" class="form-control" id="fullName" name="fname" placeholder="Enter full name" value="<?php echo $name?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Email</label>
					<input type="email" class="form-control" id="eMail" name="email" placeholder="Enter email ID" value="<?php echo $email?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">About</label>
					<input type="text" class="form-control" id="phone" name="pnum" placeholder="Enter About you" value="<?php echo $aboutme?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="website">Change Profile Picture</label>
					<div class="file-upload-wrapper" data-text="Select your file!">
          <input name="image1" type="file" class="file-upload-field" value="">
          </div>
				</div>
			</div>
		</div>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mt-3 mb-2 text-primary">Address</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="Street">Street</label>
					<input type="name" class="form-control" id="Street" name="st" placeholder="Enter Street" value="<?php echo $stre?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="ciTy">City</label>
					<input type="name" class="form-control" id="ciTy" name="ct" placeholder="Enter City" value="<?php echo $city?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="sTate">State</label>
					<input type="text" class="form-control" id="sTate" name="state" placeholder="Enter State" value="<?php echo $stat?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="zIp">Zip Code</label>
					<input type="text" class="form-control" id="zIp" name="zcode" placeholder="Zip Code" value="<?php echo $zipc?>">
				</div>
			</div>
		</div>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="text-right">
					<button type="submit" id="submit" name="update" class="btn btn-primary">Update</button>
          <!-- <input type="submit" name="update" value="update"> -->
				</div>
			</div>
		</div>
        </form>
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
$("form").on("change", ".file-upload-field", function(){
     $(this).parent(".file-upload-wrapper").attr("data-text",$(this).val().replace(/.*(\/|\\)/,''));
 })
   </script>
   <script>

document.querySelector("html").classList.add('js');

var fileInput  = document.querySelector( ".input-file" ),  
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");
      
button.addEventListener( "keydown", function( event ) {  
    if ( event.keyCode == 13 || event.keyCode == 32 ) {  
        fileInput.focus();  
    }  
});
button.addEventListener( "click", function( event ) {
   fileInput.focus();
   return false;
});  
fileInput.addEventListener( "change", function( event ) {  
    the_return.innerHTML = this.value;  
});  


   </script>
</body>

</html>