
<?php
require_once("components.php");
require_once("connection.php");
$ID=$_GET['id'];
if (isset($_POST['add_review']))
{
    $name = $_POST["name"];
    $rating = $_POST["rating"];
    $email = $_POST["email"];
    $msge = $_POST["message"];
      $sub=$_POST['title'];
    $sql = "INSERT INTO `laptop_review`(`p_id`, `customer_name`, `email`, `review`, `value`,`subject`) VALUES ('$ID','$name','$email','$msge','$rating','$sub')";
    if (mysqli_query($con, $sql))
    {
      session_start();
      $_SESSION['page'] = "laptop_detail.php?ID='$ID'";
      $_SESSION['massage']='Your Review Has Been Submitted Successfully.Thank Your For your Response';
      header("location: thankyou.php");
        echo "New Rate added successfully";

    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Review Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="review/images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="review/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
	<link rel="stylesheet" type="text/css" href="review/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="review/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="review/vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="review/vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="review/vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="review/css/util.css">
	<link rel="stylesheet" type="text/css" href="review/css/main.css">
	<link href="product-nest.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<style>
    <?php
include "assets/css/style.css";
?>
</style>
<body>

<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>


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
                <h1 data-aos="fade-up" data-aos-delay="">REVIEW FORM</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">For Mobile</p>
              </div>
            </div>
          </div>
        </div>
      </div>
	<div>  
</section>
<section>
	<div style="margin-left:16%">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" name="review">

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Tell us your name *</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name" >
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Enter your email *</span>
					<input class="input100" type="text" name="email" placeholder="Enter your email" >
				</div>

        <div class="wrap-input100">
					<span class="label-input100">REVIEW TITLE</span>
					<input class="input100" type="text" name="title" placeholder="ENTER REVIEW TITLE">
				</div>

				<div class="wrap-input100">
					<span class="label-input100">ENTER RATING</span>
					<div class="rateyo" id= "rating"
						 data-rateyo-rating="4"
						 data-rateyo-num-stars="5"
						 data-rateyo-score="3">
				    </div>
 
    <span class='result'>0</span>
    <input type="hidden" name="rating" >
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Review is required">
					<span class="label-input100">Review</span>
					<textarea class="input100" name="message" placeholder="Your review here..." ></textarea>
				</div>

        <div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<a href="">
            <button class="contact100-form-btn" name="add_review" onclick="return validation()">
							           Submit
						</button>
					</div>
				</div>
			</form>
		</div>
</div>


</section>
</main>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
 
<script>
 
 
    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });
 
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script>
function validation()
{
      if(document.review.name.value == "")
			{
					alert("Please Provide Name");
					document.review.name.focus();
					return false;	
			}
			
			if(document.review.email.value	==	"")
			{
				alert("Please provide Email");
				document.freview.email.focus();
				return false;
			}
			
			if(document.review.message.value	==	"")
			{
				alert("Please provide Review");
				document.review.message.focus();
				return false;
			}

			
			return true;
}
</script>
</body>
</html>
