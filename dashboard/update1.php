<?php
session_start();
include 'connection.php';
$Id=$_GET['id'];
$type=$_GET['ty'];
    if(isset($_POST['update']))
    {
    $_SESSION['product']=$_POST['pname'];
    $_SESSION['pfilter']=$_POST['filter'];
    $_SESSION['ptype']=$_POST['Type'];
    $_SESSION['pcom']=$_POST['company'];
    $_SESSION['pimage']=$_FILES["image1"]["name"];
    $tempname = $_FILES["image1"]["tmp_name"];
    $typ=$_POST['Type'];
    if($typ=='mobile')    
    {
    $folder = "../Mobile/".$_SESSION['pimage'];
    }else if($typ=='laptop'){
        $folder = "../Laptop/".$_SESSION['pimage'];
    }
    if (move_uploaded_file($tempname, $folder))  {
        header("Location: update2.php?id=$Id&ty=$type");
    }
    }
    
    if($type=='mobile')
    {
    $sql="SELECT * from `mobile` where `id`=$Id;";
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result) > 0)
    {
      while($row=mysqli_fetch_array($result))
    { 
        
      $name=$row['Name'];
      $fil=$row['filter'];
      $img1=$row['image'];
      $t_type=$row['table_type'];
      $comp=$row['company'];
    }
    }
    }
    else if( $type=='laptop')
    {
        $sql="SELECT * from `laptop` where `id`=$Id;";
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result) > 0)
    {
      while($row=mysqli_fetch_array($result))
    { 
        
      $name=$row['Name'];
      $fil=$row['filter'];
      $img1=$row['image'];
      $t_type=$row['table_type'];
      $comp=$row['company'];
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
@import url(https://fonts.googleapis.com/css?family=Lato:400,700,300);  
.form{
  width:400px;
}
.file-upload-wrapper{
  position:relative;
  width:50%;
  height:60px;
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
  width:100%;
}
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
                        <a href="index.php" class="nav__link ">
                        <i class='bx bx-grid-alt nav__icon' ></i>
                            <span class="nav__name">Dashboard</span>
                        </a>

                        <a href="product.php" class="nav__link active">
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
  <form action="" method="post" enctype="multipart/form-data">
    <label for="fname">Product Name</label><br>
    <input type="text" id="fname" name="pname" placeholder="Product Name" value="<?php echo $name?>">
<br>
    <label for="filter">Filter</label><br>
    <select id="filter" name="filter">
	<option >Choose Product Filter</option>
	 <optgroup label="Mobile">
      <option value="filter-huawei" <?php if ($fil == 'filter-huawei') echo ' selected="selected"'; ?>>filter-huawei</option>
      <option value="filter-samsung" <?php if ($fil == 'filter-samsung') echo ' selected="selected"'; ?>>filter-samsung</option>
      <option value="filter-apple" <?php if ($fil == 'filter-apple') echo ' selected="selected"'; ?>>filter-iphone</option>
	  <option value="filter-oppo" <?php if ($fil == 'filter-oppo') echo ' selected="selected"'; ?>>filter-oppo</option>
      <option value="filter-redmi" <?php if ($fil == 'filter-redmi') echo ' selected="selected"'; ?>>filter-redmi</option></optgroup>
      <optgroup label="Laptop">
	  <option value="filter-dell" <?php if ($fil == 'filter-dell') echo ' selected="selected"'; ?>>filter-dell</option>
	  <option value="filter-hp" <?php if ($fil == 'filter-hp') echo ' selected="selected"'; ?>>filter-hp</option>
      <option value="filter-samsung" <?php if ($fil == 'filter-samsung') echo ' selected="selected"'; ?>>filter-samsung</option>
      <option value="filter-apple" <?php if ($fil == 'filter-apple') echo ' selected="selected"'; ?>>filter-apple</option></optgroup>
    </select><br>
  <label for="Type">Type</label><br>
    <select id="Type" name="Type" value="<?php echo $t_type?>" selected="selected">
	<option selected disabled>Choose Product Type</option>
      <option value="mobile" <?php if ($t_type == 'mobile') echo ' selected="selected"'; ?>>mobile</option>
      <option value="laptop" <?php if ($t_type == 'laptop') echo ' selected="selected"'; ?>>laptop</option>
    </select><br>
	    <label for="company">Company</label><br>
    <select id="company" name="company">
	<option selected disabled>Choose Product Company</option>
	 <optgroup label="Mobile">
      <option value="huawei" <?php if ($comp == 'huawei') echo ' selected="selected"'; ?>>huawei</option>
      <option value="samsung" <?php if ($comp == 'sumsung') echo ' selected="selected"'; ?>>samsung</option>
      <option value="apple" <?php if ($comp == 'apple') echo ' selected="selected"'; ?>>iphone</option>
	  <option value="oppo" <?php if ($comp == 'oppo') echo ' selected="selected"'; ?>>oppo</option>
      <option value="redmi" <?php if ($comp == 'redmi') echo ' selected="selected"'; ?>>redmi</option></optgroup>
      <optgroup label="Laptop">
	  <option value="dell" <?php if ($comp == 'dell') echo ' selected="selected"'; ?>>dell</option>
	  <option value="hp" <?php if ($comp == 'hp') echo ' selected="selected"'; ?>>hp</option>
      <option value="samsung" <?php if ($comp == 'sumsung') echo ' selected="selected"'; ?>>sumsung</option>
      <option value="apple" <?php if ($comp == 'apple') echo ' selected="selected"'; ?>>apple</option>
      </optgroup>
    </select><br>
	<label for="Type">Choose Image</label><br><br>
	<div class="custom-file">
    <div class="file-upload-wrapper" data-text="Select your file!">
      <input name="image1" type="file" class="file-upload-field" value="">
    </div>
     </div><br><br>
     <input type="submit" value="Next" name="update">
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
       
    </div>
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
  for (i = 0; i <script a.length; i++) {
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
<script src="main.js"></script>
    </body>
</html>