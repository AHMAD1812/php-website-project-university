<?php
session_start();
require_once("connection.php");

    $id=$_GET['id'];
    $type=$_GET['ty'];
    $img=$_GET['imge'];
    echo $id;
    echo $type;
    if($type=='mobile')
    {
        mysqli_query($con,"DELETE FROM `mobile` where id='$id'") or die("Could Not Perform the Query");
        mysqli_query($con,"DELETE FROM `mobile_d` where p_id='$id' ") or die("Could Not Perform the Query");
        mysqli_query($con,"DELETE FROM `mobile_specification` where p_id='$id'") or die("Could Not Perform the Query");
            $_SESSION['massage']='ITEM DELETED SUCCESSFULLY';
            $_SESSION['page']='dashboard/product.php';
            unlink("../".$img);
            header("Location:../thankyou.php");
    }
    else if($type=='laptop')
    {
        mysqli_query($con,"DELETE FROM `laptop` where id='$id'") or die("Could Not Perform the Query");
    mysqli_query($con,"DELETE FROM `laptop_d` where p_id='$id' ") or die("Could Not Perform the Query");
    mysqli_query($con,"DELETE FROM `laptop_specification` where p_id='$id'") or die("Could Not Perform the Query");
        $_SESSION['massage']='ITEM DELETED SUCCESSFULLY';
        $_SESSION['page']='dashboard/product.php';
        unlink("../".$img);
        header("Location:../thankyou.php");
    }
    
?>