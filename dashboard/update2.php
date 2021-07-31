<?php
session_start();
include 'connection.php';
$Id=$_GET['id'];
$type=$_GET['ty'];
    if(isset($_POST['update1']))
    {
        $_SESSION['ram']=$_POST['ram'];
        $_SESSION['rom']=$_POST['rom'];
        $_SESSION['processor']=$_POST['pro'];
        $_SESSION['battery']=$_POST['batt'];
        $_SESSION['camera']=$_POST['cam'];
        $_SESSION['operator']=$_POST['opera'];
        header("Location: updateproduct.php?id=$Id&ty=$type");
    }
    if($type=='mobile')
    {
    $sql="SELECT `os`, `memory`, `camera`,`cpu`, `Price` from `mobile_specification`   where `p_id`=$Id;";
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result) > 0)
    {
      while($row=mysqli_fetch_array($result))
    { 
        
      $ops=$row['os'];
      $mem=$row['memory'];
      $camera=$row['camera'];
      $pri=$row['Price'];
      $proc=$row['cpu'];
    }
    $ra=substr($mem, 0, 1);
    $ro=substr($mem, 5,6);
    }
    
    }else if($type=='laptop')
    {
        $sql="SELECT `processor`, `ram`,`rom` ,`camera`, `price`,`generation` from `laptop_specification`   where `p_id`='$Id';";
        $result=mysqli_query($con,$sql);
        
        if(mysqli_num_rows($result) > 0)
        {
          while($row=mysqli_fetch_array($result))
        { 
          $proc=$row['processor'];
          $ra=$row['ram'];
          $camera=$row['camera'];
          $ro=$row['rom'];
          $pri=$row['price'];
          $ops=$row['generation'];
        }
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
		<!-- Style Field Css-->
		<style>
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #598DB2;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: Black;
}
</style>
    </head>
     
			
<body id="body-pd">
        <header class="header" id="header">
    <div class="header__toggle">
<i class='bx bx-menu' id="header-toggle"></i>
				<!-- Topbar Search -->
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
                        <a href="index.php" class="nav__link">
                        <i class='bx bx-grid-alt nav__icon' ></i>
                            <span class="nav__name">Dashboard</span>
                        </a>

                        <a href="product.php" class="nav__link">
                            <i class='bx bxs-cart nav__icon' ></i>
                            <span class="nav__name">Product</span>
                        </a>
                        
                        <a href="addproduct.php" class="nav__link active">
                            
							<i class='bx bxs-cart-add nav__icon '></i>
                            <span class="nav__name">Add Product</span>
                        </a>

                        <a href="mailbox.php" class="nav__link">
                            <i class='bx bx-message-square-detail nav__icon' ></i>
                            <span class="nav__name">Inbox</span>
                        </a>

                        <a href="resetpass.php" class="nav__link">
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
    <h1 class="h3 mb-0 text-gray-800">Add Product</h1>
  </div>
  <div>
  <form action="" method="post">
    <label for="fname">RAM</label><br>
    <input type="text" id="P1" name="ram" placeholder="RAM" value="<?php echo $ra; ?>">
<br>
        <label for="fname">ROM</label><br>
    <input type="text" id="P2" name="rom" placeholder="ROM" value="<?php echo $ro;?>">
<br>
     <label for="fname">PROCESSOR</label><br>
    <input type="text" id="P3" name="pro" placeholder="PROCESSOR" value="<?php echo $proc;?>">
<br>
    <label for="fname">PRICE</label><br>
    <input type="text" id="P4" name="batt" placeholder="PRICE" value="<?php echo $pri;?>">
<br>
    <label for="fname">CAMERA</label><br>
    <input type="text" id="P5" name="cam" placeholder="CAMERA" value="<?php echo $camera;?>">
<br>
<label for="fname">OPERATING SYSTEM OR GENERATION</label><br>
    <input type="text" id="P6" name="opera" placeholder="OPERATING SYSTEM OR GENERATION" value="<?php echo $ops?>">
<br>
	
</div><br><br>
    <input type="submit" value="Submit" name="update1">
  </form>
  
</div>
</div>
     
			
			

        
			
					<!-- Footer-->
			
			 <footer class="footer">
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    </body>
</html>