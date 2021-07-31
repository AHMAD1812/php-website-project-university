<?php
session_start();
include 'connection.php';
$Id=$_GET['id'];
$type=$_GET['ty'];
$name=$_SESSION['product'];
$fil=$_SESSION['pfilter'];
$typ=$_SESSION['ptype'];
$com=$_SESSION['pcom'];
$img=$_SESSION['pimage'];
if($type=='mobile')
{
$query="Update `mobile` set `Name`='$name', `filter`='$fil', `image`='Mobile/$img', `table_type`='$typ', `company`='$com' where id='$Id'";
$sql=mysqli_query($con,$query)or die("Could Not Perform the Query");
echo "1";
$ra=$_SESSION['ram'];
$ro=$_SESSION['rom'];
$proc=$_SESSION['processor'];
$batte=$_SESSION['battery'];
$came=$_SESSION['camera'];
$oper=$_SESSION['operator'];
$query="update `mobile_specification` set `os`='$opera', `cpu`='$proc', `memory`='$ra and $ro', `camera`='$came', `Price`='$batte' where p_id='$Id'";
$sql=mysqli_query($con,$query)or die("Could Not Perform the Query");
$_SESSION['page']='dashboard/product.php';
$_SESSION['massage']='Product Update successfully';
header("Location:../thankyou.php");
}
else if($type=='laptop')
{
    $query="Update `laptop` set `Name`='$name', `filter`='$fil', `image`='Laptop/$img', `table_type`='$typ', `company`='$com' where id='$Id'";
$sql=mysqli_query($con,$query)or die("Could Not Perform the Query");
echo "1";
$ra=$_SESSION['ram'];
$ro=$_SESSION['rom'];
$proc=$_SESSION['processor'];
$batte=$_SESSION['battery'];
$came=$_SESSION['camera'];
$oper=$_SESSION['operator'];
echo $ra;
echo $ro;
echo $proc;
echo $batte;
echo $oper;
echo $Id;
$query="update `laptop_specification` set `processor`='$proc', `generation`='$oper', `ram`='$ra',`rom`='$ro', `camera`='$came', `price`='$batte' where p_id='$Id'";
$sql=mysqli_query($con,$query)or die("Could Not Perform the Query");
$_SESSION['page']='dashboard/product.php';
$_SESSION['massage']='Product Update successfully';
header("Location:../thankyou.php");
}
?>