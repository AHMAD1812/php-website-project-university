<?php
include 'connection.php';
if(isset($_POST['reset']))
{
    $oldpass=$_POST['opass'];
    $newpass=$_POST['npass'];
    $conpass=$_POST['cpass'];

    $sql=mysqli_query($con,"SELECT * FROM `user` where email='admin' and password='$oldpass'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        if($newpass==$conpass)
        {
            $query="update `user` set password='$newpass' where email='admin'";
            $sql=mysqli_query($con,$query)or die("Could Not Perform the Query");
            echo "<script>alert('Password changed successfully' )</script>";
        }
        else
        {
            echo "<script>alert('Password are not same $newpass $conpass' )</script>";
        }
    }
    else
    {
        echo "<script>alert('Password is not correct')</script>";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<!--fontawesome-->
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="icon" type="image/png" href="Productnest.png"/>
        <title>DashBoard/ Product nest</title>
    </head>
     
			
<body id="body-pd">
        <header class="header" id="header">
    <div class="header__toggle">
<i class='bx bx-menu' id="header-toggle"></i>
				<!-- Topbar Search -->
<div class="dropdown" >
  <button onclick="myFunction()" class="dropbtn">Search Admin Pages</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <a href="index.php"><font size="2">DashBoard</font></a>
    <a href="product.php"><font size="2">Product</font></a>
    <a href="addproduct.php"><font size="2">Add product</font></a>
	    <a href="mailbox.php"><font size="2">Inbox</font></a>
    <a href="resetpass.php"><font size="2">Change password</font></a>

  </div>
</div>
            </div>
            <!-- Nav Item - User Information -->
            <li>
            <span class="mr-2 d-none d-lg-inline text-gray-600 medium">Admin DashBoard</span>
              </a>
            </li>

          </ul>
        </nav>
        </header>

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                        <i class='bx bx-layer nav__logo-icon'></i>
                        <span class="nav__logo-name">Product Nest</span>
                    </a>

                    <div class="nav__list">
                        <a href="index.php" class="nav__link ">
                        <i class='bx bx-grid-alt nav__icon' ></i>
                            <span class="nav__name">Dashboard</span>
                        </a>

                        <a href="product.php" class="nav__link">
                            <i class='bx bxs-cart nav__icon' ></i>
                            <span class="nav__name">Product</span>
                        </a>
                        
                        <a href="addproduct.php" class="nav__link">
                            
							<i class='bx bxs-cart-add nav__icon'></i>
                            <span class="nav__name">Add Product</span>
                        </a>

                        <a href="mailbox.php" class="nav__link">
                            <i class='bx bx-message-square-detail nav__icon' ></i>
                            <span class="nav__name">Inbox</span>
                        </a>

                        <a href="resetpass.php" class="nav__link active">
                           <i class='bx bx-refresh nav__icon'></i>
                            <span class="nav__name">Change Password</span>
                        </a>
                    </div>
                </div>

                <a href="../login.php" class="nav__link">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>
          <br><br><br><br>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Change Your Password</h1>
  </div>
  <div>
<div class="container">
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
<form action="" method="post" id="passwordForm">
<label for="password0"><b>Enter Old Password</b></label><br>
<input type="password" class="input-lg form-control" name="opass" id="password0" placeholder="Old Password" autocomplete="off"><br>
<label for="password1"><b>Enter New Password</b></label><br>
<input type="password" class="input-lg form-control" name="npass" id="password1" placeholder="New Password" autocomplete="off"><br>
<label for="password2"><b>Enter Repeat Password</b></label><br>
<input type="password" class="input-lg form-control" name="cpass" id="password2" placeholder="Repeat Password" autocomplete="off"><br>
<br>
<input type="submit" name="reset" class="col-xs-12 btn btn-primary btn-load btn-lg" data-loading-text="Changing Password..." value="Change Password">
</form>
</div><!--/col-sm-6-->
</div><!--/row-->
</div>
     
			
			

        
			
					<!-- Footer-->
			
			 <footer class="footer" style="margin-top:10%">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<p class="mb-0">
								<a href="index.html" class="text-muted"><strong>Product nest DashBoard </strong></a> &copy
							</p>
						</div>
						<div class="col-6 text-right">
							<ul class="list-inline">
								<li class="footer-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="footer-item">
									<a class="text-muted" href="#">Help Center</a>
								</li>
								<li class="footer-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="footer-item">
									<a class="text-muted" href="#">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
       
    
      <script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>

 
        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
		<script src="reset.js"></script>
    </body>
</html>