<?php
session_start();
    include "connection.php";
    if(isset($_POST['signup']))
    {
         
            $email     =  $_POST['email'];
            $sql=mysqli_query($con,"SELECT * FROM user where Email='$email'");
            if(mysqli_num_rows($sql)>0)
            {
              $_SESSION['massage']='Email Id Already exits';
              $_SESSION['page']='signup.php';
              header("Location:thankyou.php");
            }
            else
            {
                $Fname		=		$_POST['name'];
                $pass		=		$_POST['pass'];
                $cpass		=		$_POST['re_pass'];
                if($Fname=="")
                {
                  echo "<script>alert('PLease Provide Name')</script>";
                }
                else if($email=="")
                {
                  echo "<script>alert('PLease Provide Email')</script>";
                }
                else if($pass=="" && $cpass=="")
                {
                  echo "<script>alert('PLease Provide Password')</script>";
                }
                else
                {
                  if($pass==$cpass)
                  {
                    session_start();
                    $_SESSION["First_Name"]=$Fname;
                  $query="INSERT INTO `user`(`Name`, `Email`, `password` ) VALUES ('$Fname','$email', '$pass')";
                  $sql=mysqli_query($con,$query)or die("Could Not Perform the Query");
                  header ("Location: login.php");
                  }
                  else
                  {
                      echo "<script>alert('Password are not same')</script>";
                  }
                }
          }
       
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Product Nest-Signin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="product-nest.png" rel="icon">
<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

  <!-- Google Fonts -->
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

  <!-- Template Main CSS File -->
   <style>
  <?php include "assets/css/signin.css" ?>
  <?php include "assets/css/style.css" ?>
</style>

</head>

<body>
<header class="site-navbar js-sticky-header site-navbar-target" role="banner">

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
              <div class="col-md-7 text-center hero-text-review">
                <h1 data-aos="fade-up" data-aos-delay="">SIGN UP</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Sign Up to our website.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
      <br>
      <br>
      <br>
      <section class="signup">
            <div class="container1">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="" name="register">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" onclick="return validate();"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                        <a href="index.php" class="signup-image-link">Back To Home</a>
                    </div>
                </div>
            </div>
        </section>

    <!-- End Testimonials Section -->

    <!-- ======= CTA Section ======= --><!-- End CTA Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

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
    function validate()
		
		{
      
			if(document.register.name.value == "")
			{
					alert("Please Provide Name");
					document.register.name.focus();
					return false;	
			}
			
			if(document.register.email.value	==	"")
			{
				alert("Please provide Email");
				document.register.email.focus();
				return false;
			}
			
			if(document.register.pass.value	==	"")
			{
				alert("Please provide Password");
				document.dform.pass.focus();
				return false;
			}
      if(document.register.re_pass.value	==	"")
			{
				alert("Please provide Confirm Password");
				document.register.re_pass.focus();
				return false;
      }
      if(document.getElementById("agree-term").checked  == false)
			{
				
			alert("Please Agree Our term");
			return false;	
			}
			
			
			return true;
		}
    </script>
</body>

</html>