<?php
    session_start();
    require_once "connection.php";
    $Id=$_SESSION["status"];
    echo $Id;
    mysqli_query($con,"UPDATE `user` SET `status`='offline' WHERE Email='$Id'");
    unset($_SESSION["id"]);
    unset($_SESSION["name"]);
    session_destroy();
    header("Location:login.php");
?>