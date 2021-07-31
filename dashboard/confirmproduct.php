<?php
session_start();
include 'connection.php';
$sql=mysqli_query($con,"select * from `mobile`");
if(mysqli_num_rows($sql)>0)
{
  while($rows=mysqli_fetch_array($sql))
  {
     $id=$rows['Id'];
  }
}
$id=$id+1;
$name=$_SESSION['product'];
$fil=$_SESSION['pfilter'];
$typ=$_SESSION['ptype'];
$com=$_SESSION['pcom'];
$img=$_SESSION['pimage'];
echo $typ;
if($typ=='mobile')
{
  $sql=mysqli_query($con,"select * from `mobile`");
if(mysqli_num_rows($sql)>0)
{
  while($rows=mysqli_fetch_array($sql))
  {
     $id=$rows['Id'];
  }
}
$id=$id+1;
$query="INSERT INTO `mobile`(`Id`, `Name`, `filter`, `image`, `table_type`, `company`) VALUES ('$id','$name','$fil','Mobile/$img','$typ','$com')";
$sql=mysqli_query($con,$query)or die("Could Not Perform the Query");
$ra=$_SESSION['ram'];
$ro=$_SESSION['rom'];
$proc=$_SESSION['processor'];
$batte=$_SESSION['battery'];
$came=$_SESSION['camera'];
$oper=$_SESSION['operator'];
$query="INSERT INTO `mobile_specification`(`p_id`, `os`, `weight`, `sim`, `cpu`, `size`, `protection`, `memory`, `camera`, `battery`, `Price`) VALUES ('$id','$oper','169 g','Dual Sim, Dual Standby (Nano-SIM)','Octa-core (2 x 2.27 GHz Cortex-A76 + 6 x 1.88 GHz ','6.7 Inches','Corning Gorilla Glass 37','$ra and $ro','$came','(Li-Po Non removable), 4500 mAh','$batte')";
$sql=mysqli_query($con,$query)or die("Could Not Perform the Query");
$query="INSERT INTO `mobile_d`(`p_id`, `title`, `ram1`, `ram2`, `ram3`, `rom1`, `rom2`, `img1`, `img2`, `img3`, `buy1`, `d1`, `d2`, `d3`, `d4`) VALUES ('$id','$name','4 GB','6 GB','8 GB','64 GB','128 GB','Mobile/nova1.jpg','Mobile/mi113.jpg','Mobile/reno51.jpg','https://www.telemart.pk/mobile-and-tablets.html','Released 2020, September 24','Android 10, ColorOS 7.2','(Li-Po Non removable), 4500 mAh','$came')";
$sql=mysqli_query($con,$query)or die("Could Not Perform the Query");
$_SESSION['page']='dashboard/product.php';
$_SESSION['massage']='product add successfully';
header("Location:../thankyou.php");
}
else if($typ=='laptop')
{
  $sql=mysqli_query($con,"select * from `laptop`");
if(mysqli_num_rows($sql)>0)
{
  while($rows=mysqli_fetch_array($sql))
  {
     $id=$rows['Id'];
  }
}
$id=$id+1;
  $query="INSERT INTO `laptop`(`Id`, `Name`, `filter`, `Image`, `table_type`, `company`) VALUES ('$id','$name','$fil','Laptop/$img','$typ','$com')";
$sql=mysqli_query($con,$query)or die("Could Not Perform the Query");
$ra=$_SESSION['ram'];
$ro=$_SESSION['rom'];
$proc=$_SESSION['processor'];
$batte=$_SESSION['battery'];
$came=$_SESSION['camera'];
$oper=$_SESSION['operator'];
$query="INSERT INTO `laptop_specification`(`p_id`, `generation`, `processor`, `ram`, `rom`, `graphics memory`, `backlight`, `screen size`, `screen surface`, `screen resolution`, `touch screen`, `camera`, `price`) VALUES ('$id','$oper','10th Generation Core i7-10510U','$ra','$ro','Intel® UHD Graphics','LED','16.7 inches','FHD (1920 x 1080) IPS LED Backlight Touch Display','1920 x 1080','Yes','$came','$batte')";
$sql=mysqli_query($con,$query)or die("Could Not Perform the Query");
$query="INSERT INTO `laptop_d`(`p_id`, `title`, `ram1`, `ram2`, `ram3`, `rom1`, `rom2`, `img1`, `img2`, `img3`, `buy`, `d1`, `d2`, `d3`, `d4`) VALUES ('$id','$name','4 GB','8 GB','16 GB','128GB SSD','512GB HDD','Laptop/macpro3.jpeg','Laptop/dellins1.jpeg','Laptop/hp4503.png','https://www.telemart.pk/mobile-and-tablets.html','10th Generation Intel® Core™ i7-10750H','NVIDIA® GeForce® GTX 1650 Ti 4GB GDDR6','1920 x 1020 (Full HD) 15.6','Windows 10 Home English')";
$sql=mysqli_query($con,$query)or die("Could Not Perform the Query");
$_SESSION['page']='dashboard/product.php';
$_SESSION['massage']='product add successfully';
header("Location:../thankyou.php");
}
?>