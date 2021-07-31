<?php
session_start();
require_once("connection.php");
  $user_name=$_SESSION["First_Name"];
  if($user_name=="not")
  {
    $_SESSION['massage']='Please login to Make your wishlist';
    header("Location:thankyou.php");
  }
  else
  {
    $user_id=$_SESSION['ID'];
    $id=$_GET['ID'];
    $name=$_GET['Name'];
    $type=$_GET['ty'];
    $sql=mysqli_query($con,"SELECT * FROM `wishlist` where product_id='$id' AND type ='$type' AND user_id='$user_id'");
    if(mysqli_num_rows($sql)>0)
    {
        $_SESSION['massage']='ITEM IS ALREADY PRESENT IN WISHLIST';
        header("Location:thankyou.php");
    }
    else
    {
        echo $type;
        $query="INSERT INTO `wishlist`(`user_id`, `product_id`, `name`,`type`) VALUES ('$user_id','$id','$name','$type')";
        $sql=mysqli_query($con,$query)or die("Could Not Perform the Query");
        $_SESSION['massage']='ITEM SUCCFULLY ADDED IN WISHLIST';
        header("Location:thankyou.php");
    }
    
  }
  ?>
