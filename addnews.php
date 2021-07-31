<?php
include 'connection.php';
if(isset($_POST['news']))
{
    $email=$_POST['email'];
    $sql=mysqli_query($con,"SELECT * FROM `newsletter` where Email='$email'");
    if(mysqli_num_rows($sql)>0)
    {
        echo "<script>alert('You already subscribe for the newsletter')</script>";
    }
    else
    {
        $query="INSERT INTO `newsletter`(Email) VALUES ('$email')";
        $sql=mysqli_query($con,$query)or die("Could Not Perform the Query");
        echo "<script>alert('You have successfully subscribe for the newsletter')</script>";
    }
    header ("Location: index.php");
}

?>