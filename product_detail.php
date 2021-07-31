<?php
 session_start();
require_once("components.php");
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
$Id=$_GET['ID'];
$_SESSION['page']="product_detail.php?ID=".$Id;

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <?php
include "assets/css/style.css";
include "style.css";

    ?>
    
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
<?php

$host="localhost:3308";
$username="root";
$password="";
$database="product_web";


$db = mysqli_connect($host,$username,$password,$database);
$sql1="SELECT * from mobile_d where `p_Id`=$Id";
$result1=mysqli_query($db,$sql1);
if(!$db)
{
    echo "Connection failed";
}
else
{
    $sql="SELECT `mobile_specification`.`os`,`mobile_specification`.`weight`,`mobile_specification`.`sim`,`mobile_specification`.`cpu`, `mobile_specification`.`size`,`mobile_specification`.`protection`,`mobile_specification`.`memory`,`mobile_specification`.`camera`, `mobile_specification`.`battery`,`mobile_specification`.`Price`,`mobile`.`Name`,`mobile`.`image` from `mobile_specification` inner JOIN `mobile` on `mobile_specification`.`p_id`=`mobile`.`Id` where `mobile`.`Id`=$Id";
    $result=mysqli_query($db,$sql);

    if(mysqli_num_rows($result) > 0)
    {
        while($row=mysqli_fetch_array($result))
        {
          $name=$row['Name'];
          $img=$row['image'];
          $ops=$row['os'];
          $wght=$row['weight'];
          $si=$row['sim'];
          $cp=$row['cpu'];
          $siz=$row['size'];
          $pro=$row['protection'];
          $mem=$row['memory'];
          $cam=$row['camera'];
          $batt=$row['battery'];
          $pri=$row['Price'];
        }
    }
        // $sql1="SELECT * from mobile_d where `p_Id`=$Id";
        // $result1=mysqli_query($db,$sql1);
        // if((mysqli_num_rows($result1) > 0)
        // {
          while($row1=mysqli_fetch_array($result1))
          {
            $ti=$row1['title'];
            $r1=$row1['ram1'];
            $r2=$row1['ram2'];
            $r3=$row1['ram3'];
            $ro1=$row1['rom1'];
            $ro2=$row1['rom2'];
            $image1=$row1['img1'];
            $image2=$row1['img2'];
            $image3=$row1['img3'];
            $buy=$row1['buy1'];
            $ds1=$row1['d1'];
            $ds2=$row1['d2'];
            $ds3=$row1['d3'];
            $ds4=$row1['d4'];
          }
        // }
        
          $data= "<div class=\"container\">
        <div class=\"row align-items-center\">
          <div class=\"col-12\">
            <div class=\"row justify-content-center\">
              <div class=\"col-md-7 text-center hero-text\">
                <h1 data-aos=\"fade-up\" data-aos-delay=\"\">$name</h1>
                <p class=\"mb-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">You can Select latest Mobile Models here.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
<section>
<div class=\"super_container\" style=\"margin-left:4%; margin-right:4%;\">
    <!-- <div class=\"single_product\"> -->
        <div class=\"container-fluid\" style=\" background-color: #fff; padding: 11px;\">
            <div class=\"row\">
                 <div class=\"col-lg-2 order-lg-1 order-2\">
                    <ul class=\"image_list\">
                        <li><img src=\"$image1\" alt=\"\" ></li>
                        <li><img src=\"$image2\" alt=\"\" ></li>
                        <li><img src=\"$image3\" alt=\"\" ></li>
                    </ul>
                </div>
                <div class=\"col-lg-4 order-lg-2 order-1\">
                    <div class=\"image_selected\"><img src=\"$img\" alt=\"\" ></div>
                </div>
                <div class=\"col-lg-6 order-3\">
                    <div class=\"product_description\">
                        
                        <div class=\"product_name\">$ti</div>
                        <div> <span class=\"product_price\">$pri</span>  </div>
                        <hr class=\"singleline\">
                        <div> <span class=\"product_info\">$ds1<span><br> <span class=\"product_info\">$ds2<span><br> <span class=\"product_info\">$ds3<span><br> <span class=\"product_info\">$ds4<span><br> </div>
                        <div>
                            
                                <div class=\"col-md-7\"> </div>
                            </div>
                            <div class=\"row\" style=\"margin-top: 15px;\">
                                <div class=\"col-xs-6\" style=\"margin-left: 15px;\"> <span class=\"product_options\">RAM Options</span><br> 
                                <button class=\"btn btn-primary btn-sm\">$r1</button> <button class=\"btn btn-primary btn-sm\">$r2</button> 
                                <button class=\"btn btn-primary btn-sm\">$r3</button> 
                                </div>
                                <div class=\"col-xs-6\" style=\"margin-left: 55px;\"> <span class=\"product_options\">Storage Options</span><br> 
                                <button class=\"btn btn-primary btn-sm\">$ro1</button> <button class=\"btn btn-primary btn-sm\">$ro2</button> 
                                </div>
                            </div>
                        </div>
                        <hr class=\"singleline\">
                        <div class=\"order_info d-flex flex-row\">
                            
                        </div>
                        <div class=\"row btnbuy\">
                            
                            <div class=\"col-lg-10\"> 
                             <a href=\"$buy\"><button type=\"button\" class=\"btn btn-primary shop-button\">Buy Now</button> </a>
                               <a href=\"addwish.php?ID=$Id&Name=$name&ty=mobile\"> <div class=\"product_fav\"><i class=\"fas fa-heart\"></i></div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            
            <div class=\"row row-underline\">
                <div class=\"col-md-6\"> <span class=\" deal-text\">Specifications</span> </div>
                <div class=\"col-md-6\"> <a href=\"#\" data-abc=\"true\"> <span class=\"ml-auto view-all\"></span> </a> </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <table class=\"col-md-12\">
                        <tbody>
                            <tr class=\"row mt-10\">
                                <td class=\"col-md-4\"><span class=\"p_specification\">Operating System</span> </td>
                                <td class=\"col-md-8\">
                                    <ul>
                                        <li class=\"p_details\">$ops</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class=\"row mt-10\">
                                <td class=\"col-md-4\"><span class=\"p_specification\">Weight:</span> </td>
                                <td class=\"col-md-8\">
                                    <ul>
                                        <li class=\"p_details\"> $wght </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class=\"row mt-10\">
                                <td class=\"col-md-4\"><span class=\"p_specification\">SIM</span> </td>
                                <td class=\"col-md-8\">
                                    <ul>
                                        <li class=\"p_details\">$si</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class=\"row mt-10\">
                                <td class=\"col-md-4\"><span class=\"p_specification\">CPU</span> </td>
                                <td class=\"col-md-8\">
                                    <ul>
                                        <li class=\"p_details\">$cp</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class=\"row mt-10\">
                                <td class=\"col-md-4\"><span class=\"p_specification\">Size</span> </td>
                                <td class=\"col-md-8\">
                                    <ul>
                                        <li class=\"p_details\">$siz</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class=\"row mt-10\">
                                <td class=\"col-md-4\"><span class=\"p_specification\">Protection</span> </td>
                                <td class=\"col-md-8\">
                                    <ul>
                                        <li class=\"p_details\">$pro</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class=\"row mt-10\">
                                <td class=\"col-md-4\"><span class=\"p_specification\">Memory</span> </td>
                                <td class=\"col-md-8\">
                                    <ul>
                                        <li class=\"p_details\">$mem</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class=\"row mt-10\">
                                <td class=\"col-md-4\"><span class=\"p_specification\">Camera</span> </td>
                                <td class=\"col-md-8\">
                                    <ul>
                                        <li class=\"p_details\">$cam</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class=\"row mt-10\">
                                <td class=\"col-md-4\"><span class=\"p_specification\">Battery</span> </td>
                                <td class=\"col-md-8\">
                                    <ul>
                                        <li class=\"p_details\">$batt</li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</section>
";
echo $data;
$sql="SELECT count(`customer_name`) as num,sum(`value`) as rat,`value` from mobile_review where `p_id`=$Id";
    $result=mysqli_query($db,$sql);

    if(mysqli_num_rows($result) > 0)
     {
        while($row=mysqli_fetch_array($result))
        {
            
            $noofrat=$row['num'];
            $total=$row['rat'];
            $v=$row['value'];
            if($noofrat!=0)
            {
              $point=$total/$noofrat;
              $per=$point*100;
              $per=$per*2;
              if($v==5 && $noofrat==1)
              {
              $per=substr($per, 0, 3);
              }
              else
              {
                $per=substr($per, 0, 2);
              }
            }
            else
            {
              $noofrat=0;
              $per=0;
            }
        }
      }
        $sql="SELECT `value` from mobile_review where `p_id`=$Id";
    $result=mysqli_query($db,$sql);

    if(mysqli_num_rows($result) > 0)
     {
$v1=0;
$v2=0;
$v3=0;
$v4=0;
$v5=0;
        while($row=mysqli_fetch_array($result))
        {
            if($row['value']==1)
            {
              $v1++;
            }
            if($row['value']==2)
            {
              $v2++;
            }
            if($row['value']==3)
            {
              $v3++;
            }
            if($row['value']==4)
            {
              $v4++;
            }
            if($row['value']==5)
            {
              $v5++;
            }
        }
        $overall=(($v1*1)+($v2*2)+($v3*3)+($v4*4)+($v5*5))/$noofrat;
    }
    else
    {
      $v1=0;
      $v2=0;
      $v3=0;
      $v4=0;
      $v5=0;
      $overall=(($v1*1)+($v2*2)+($v3*3)+($v4*4)+($v5*5));
    }
$data="   <!-- End Portfolio Section -->
    <!-- ======= Testimonials Section ======= -->
       <section class=\"section border-top border-bottom\">
      <div class=\"container\">
        <div class=\"row justify-content-center text-center mb-5\">
          <div class=\"col-md-4\">
            <h2 class=\"section-heading\">Review From Our Users</h2>
          </div>
        </div>
        <div class=\"container-fluid px-0 py-5 mx-auto\" style=\"margin-top:-40px;\">
            <div class=\"row justify-content-center mx-0 mx-md-auto\">
                <div class=\"col-lg-10 col-md-11 px-1 px-sm-2\">
                    <div class=\"card border-0 px-3\">
                      
                        <div class=\"d-flex row py-5 px-5 bg-light\">
                            <div class=\"green-tab p-2 px-3 mx-2\">
                                <p class=\"sm-text mb-0\">OVERALL RATING</p>
                                <h4>$overall</h4>
                            </div>
                            <div class=\"white-tab p-2 mx-2 text-muted\">
                                <p class=\"sm-text mb-0\">ALL REVIEWS</p>
                                <h4>$noofrat</h4>
                            </div>
                            <div class=\"white-tab p-2 mx-2\">
                                <p class=\"sm-text mb-0 text-muted\">POSITIVE REVIEWS</p>
                                <h4 class=\"green-text\">$per%</h4>
                            </div>
                            <div class=\"ml-md-auto p-2 mx-md-2 pt-4 pt-md-3\"> <a href=\"review_mobile.php?id=$Id\"> <button class=\"btn btn-red px-4\">WRITE A REVIEW</button> </a></div>
                        </div> 
                        
                    </div>
                </div>
            </div>
        </div>
        ";
echo $data;

      
    }

     
?>
        <div class="row justify-content-center text-center">
          <div class="col-md-7">
            <div class="owl-carousel testimonial-carousel">
            <div class="row justify-content-center text-center">
           </div>
          </div>
</div>
          <div class="col-md-7">
            <div class="owl-carousel testimonial-carousel">
            
              <?php
               $sql="SELECT * from `mobile_review` where `p_id`=$Id;";
               $result=mysqli_query($db,$sql);
           
               if(mysqli_num_rows($result) > 0)
               {
                 while($row=mysqli_fetch_array($result))
                 {
                   review_show($row['customer_name'],$row['review'],$row['value'],$row['subject']);
                 } 
               }
               else
               {
                 $show="<h1>No Review avaliable yet.Please Write Review to help others to find best mobile</h1>
                 ";
                 echo $show;
               }
              ?>
              </div>
              </div>
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