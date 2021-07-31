<?php

include "connection.php";
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
if(isset($_POST['signin']))
{
  session_start();
    $email     =  $_POST['your_name'];
    $pass		=		$_POST['your_pass'];
    include 'connection.php';
    $sql=mysqli_query($con,"SELECT * FROM `user` where email='$email' and password='$pass'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["ID"] = $row['Id'];
        $_SESSION["Email"]=$row['Email'];
        $_SESSION["First_Name"]=$row['Name'];
        $_SESSION["status"]=$email;
        $em=$row['Email'];    
        if($em=='admin')
        {
          header("Location: dashboard/index.php");
        }
        if(!empty($_POST['remember-me']))
        {
          
          setcookie("username", $_POST["your_name"], time()+ (3600*24));
          setcookie("password", $_POST["your_pass"], time()+ (3600*24));
        }
        if($em!='admin')
        {
        mysqli_query($con,"UPDATE `user` SET `status`='online' WHERE email='$email'");
        header("Location: home.php"); 
        }
    }  
    else
    {
        echo "<script>alert('Invalid Email ID/Password')</script>";
    }
        
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Product Nest-Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="product-nest.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
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
                <h1 data-aos="fade-up" data-aos-delay="">LOG IN</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Enter your email and password to login to our website.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
      <br>
      <br>
      <br>
      <section class="sign-in">
            <div class="container1">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="signin-image.jpg" alt="sing up image"></figure>
                        <a href="signup.php" class="signup-image-link">Create an account</a>
                        <a href="index.php" class="signup-image-link">Goto Home page</a>
                        <a href="forgot.php" class="signup-image-link">Forgot Password</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Log In</h2>
                        <form method="POST" class="register-form" id="login-form" name="register">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Email" value="<?php if(isset($_COOKIE["username"])) {echo $_COOKIE["username"];}?>"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password" value="<?php if(isset($_COOKIE["password"])) {echo $_COOKIE["password"];}?>"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" onclick="return validate()"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
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
			if(document.register.your_name.value == "")
			{
					alert("Please Provide Name");
					document.register.your_name.focus();
					return false;	
			}
			
		
			if(document.register.your_pass.value	==	"")
			{
				alert("Please provide Password");
				document.register.your_pass.focus();
				return false;
            }
			
			return true;
		}
    </script>
</body>

</html>