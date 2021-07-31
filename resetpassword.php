<?php
session_start();
require_once('connection.php');
if(!isset($_GET['code']))
{
    $_SESSION['massage']='PAGE NOT FOUND';
        $_SESSION['page']='login.php';
        header("Location:thankyou.php");
}
$code=$_GET['code'];
$sql=mysqli_query($con,"SELECT * FROM `resetpassword` where code='$code'");
if(mysqli_num_rows($sql)==0)
{
    $_SESSION['massage']='PAGE NOT FOUND';
        $_SESSION['page']='login.php';
        header("Location:thankyou.php");
}
$row  = mysqli_fetch_array($sql);
if(is_array($row))
{
    $email=$row['email'];
}
if(isset($_POST['reset']))
{
    $new=$_POST['npass'];
    $confirm=$_POST['cpass'];
    if($new==$confirm)
    {
        $query="update `user` set password='$new' where Email='$email'";
        $sql=mysqli_query($con,$query)or die("Could Not Perform the Query");
        $query="delete from `resetpassword` where code='$code';";
        $sql=mysqli_query($con,$query)or die("Could Not Perform the Query");
        $_SESSION['massage']='Password Updated Successfully';
        $_SESSION['page']='login.php';
        header("Location:thankyou.php");
    }
    else
    {
        echo "<script>alert('Password are not Same')</script>";
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
                <h1 data-aos="fade-up" data-aos-delay="">RESET PASSWORD</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Enter new Pasword to update your password.</p>
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
                        <figure><img src="reset.svg" alt="sing up image"></figure>
                       
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">RESET PASSWORD</h2>
                        <form method="POST" class="register-form" id="login-form" name="forgot">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="npass" id="your_name" placeholder="NEW PASSWORD"/>
                            </div>
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="cpass" id="your_name" placeholder="CONFIRM PASSWORD"/>
                            </div>
                            <div class="form-group form-button">
                               <input type="submit" name="reset" id="signin" class="form-submit" value="Reset" onclick="return validation()"/>
                            </div>
                        </form>
                        
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
   function validation()
{
      if(document.forgot.npass.value == "")
			{
					alert("Please Provide New Password");
					document.forgot.npass.focus();
					return false;	
			}
			
			if(document.forgot.cpass.value	==	"")
			{
				alert("Please provide Confirm Password");
				document.forgot.cpass.focus();
				return false;
			}
			
		

			
			return true;
}
    </script>
</body>

</html>