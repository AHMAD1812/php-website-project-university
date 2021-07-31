<?php
session_start();
require_once("connection.php");

    $user_id=$_GET['ID'];
    $name=$_GET['Name'];
    mysqli_query($con,"DELETE FROM `wishlist` where user_id='$user_id' AND name='$name';") or die("Could Not Perform the Query");
        $_SESSION['massage']='ITEM DELETED SUCCESSFULLY';
        $_SESSION['page']='wishlist.php';
        header("Location:thankyou.php");
?>