<?php
include "connection.php";
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
    <h1 class="h3 mb-0 text-gray-800">Products Managment</h1>
  </div>

     
                    <!-- column -->
                    <div class="col-md-12 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Manage Your Products</h4>
                                        <h5 class="card-subtitle">Mobiles</h5>
                                    </div>
                                </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">Products</th>
                                            <th class="border-top-0">Description</th>
                                            <th class="border-top-0">Ram</th>
                                            <th class="border-top-0">Rom</th>
                                            <th class="border-top-0">Processor</th>
                                            <th class="border-top-0">Price</th>
                                            <th class="border-top-0">Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $sql="SELECT mobile.table_type,mobile_d.p_id,mobile_d.title,mobile_d.ram3,mobile_d.rom2,mobile_d.d4,mobile_specification.Price,mobile.image,mobile.Name from mobile_d INNER JOIN mobile_specification on mobile_d.p_id=mobile_specification.p_id INNER JOIN mobile on mobile_d.p_id=mobile.Id ORDER by mobile_d.p_id asc";
                                    $result=mysqli_query($con,$sql);
                  
                                    if(mysqli_num_rows($result) > 0)
                                    {
                                       
                                      while($row=mysqli_fetch_array($result))
                                      {
                                         $ID=$row['p_id'];
                                          $tit=$row['title'];
                                          $ram=$row['ram3'];
                                          $rom=$row['rom2'];
                                          $ds=$row['d4'];
                                          $img=$row['image'];
                                          $pri=$row['Price'];
                                          $name=$row['Name'];
                                          $type=$row['table_type'];
                                        $data="
                                        <tr>
                                        <td>
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"m-r-10\"><img src=\"../$img\" height=\"40px\" width=\"40px\"></div>
                                                <div class=\"\">
                                                    <h4 class=\"m-b-0 font-16\">$name</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$tit</td>
                                        <td>$ram</td>
                                        <td>
                                            <label class=\"label label-danger\">$rom</label>
                                        </td>
                                        <td>$ds</td>
                                        <td>
                                            <h5 class=\"m-b-0\">$pri</h5>
                                        </td>
                                        <td><div class=\"btn-group\">
                                            
                                        <a href=\"update1.php?id=$ID&ty=$type\"><button type=\"button\" class=\"btn btn-primary\">Update</button>
                                             <a href=\"deleteproduct.php?id=$ID&ty=$type&imge=$img\"><button type=\"button\" class=\"btn btn-primary\">Delete</button></a>
                                           </div>
                                           </td>
                                    </tr>
                                    </tr>
                                        ";
                                        echo $data;
                                        
                                      }
                                     
                                    }
                                    
                                        
                                        ?>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                            
                        </div>
                    </div>
                   

        </div>
		<div class="container-fluid">
     
                    <!-- column -->
                    <div class="col-md-12 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Manage Your Products</h4>
                                        <h5 class="card-subtitle">Laptops</h5>
                                    </div>
                                </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">
                            <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">Products</th>
                                            <th class="border-top-0">Description</th>
                                            <th class="border-top-0">Ram</th>
                                            <th class="border-top-0">Rom</th>
                                            <th class="border-top-0">Processor</th>
                                            <th class="border-top-0">Price</th>
                                            <th class="border-top-0">Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    
                                    $sql="SELECT laptop.table_type,laptop_d.p_id,laptop_d.title,laptop_d.ram3,laptop_d.rom2,laptop_d.d4,laptop_specification.Price,laptop.Image,laptop.Name from laptop_d INNER JOIN laptop_specification on laptop_d.p_id=laptop_specification.p_id INNER JOIN laptop on laptop_d.p_id=laptop.Id ORDER by laptop_d.p_id DESC";
                                    $result=mysqli_query($con,$sql);
                  
                                    if(mysqli_num_rows($result) > 0)
                                    {
                                        
                                      while($row=mysqli_fetch_array($result))
                                      {
                                        $ID=$row['p_id'];
                                          $tit=$row['title'];
                                          $ram=$row['ram3'];
                                          $rom=$row['rom2'];
                                          $ds=$row['d4'];
                                          $img=$row['Image'];
                                          $pri=$row['Price'];
                                          $name=$row['Name'];
                                          $type=$row['table_type'];
                                        $data="
                                        <tr>
                                        <td>
                                            <div class=\"d-flex align-items-center\">
                                                <div class=\"m-r-10\"><img src=\"../$img\" height=\"40px\" width=\"40px\"></div>
                                                <div class=\"\">
                                                    <h4 class=\"m-b-0 font-16\">$name $ID</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$tit</td>
                                        <td>$ram</td>
                                        <td>
                                            <label class=\"label label-danger\">$rom</label>
                                        </td>
                                        <td>$ds</td>
                                        <td>
                                            <h5 class=\"m-b-0\">$pri</h5>
                                        </td>
                                        <td><div class=\"btn-group\">
                                            
                                        <a href=\"update1.php?id=$ID&ty=$type\"><button type=\"button\" class=\"btn btn-primary\">Update</button></a>
                                        <a href=\"deleteproduct.php?id=$ID&ty=$type&imge=$img\"><button type=\"button\" class=\"btn btn-primary\">Delete</button></a>
                                           </div>
                                           </td>
                                    </tr>
                                        ";
                                        echo $data;
                                         
                                      }
                                    }
                                        
                                        ?>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
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

  </script>
        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>