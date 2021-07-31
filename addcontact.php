<?php
session_start();
require_once("connection.php");
  
   if(isset($_POST['send']))
   {
    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $msge=$_POST['message'];
    $sql=mysqli_query($con,"INSERT INTO `contact`( `name`, `email`, `message`) VALUES ('$name','$email','$msge')")or die("Could Not Perform the Query");
    $_SESSION['massage']='YOUR MESSAGE HAS BEEN SEND SUCCESSFULLY';
     header("Location:thankyou.php");
    }
?>