<?php
include "connection.php";
session_start();
if(isset($_POST['update']))
{
    $filename = $_FILES["image1"]["name"];
    $tempname = $_FILES["image1"]["tmp_name"];    
    $folder = "user_pic/".$filename;
	

	$fn=$_POST['fname'];
    $em=$_POST['email'];
    $pn=$_POST['pnum'];
    $str=$_POST['st'];
    $cty=$_POST['ct'];
    $sta=$_POST['state'];
    $zip=$_POST['zcode'];
    $id=$_SESSION['ID'];
    $sql="select * from `user_infromation` where id=$id";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
        $sql1 = "UPDATE `user_infromation` SET `First Name`='$fn',`Email`='$em',`About`='$pn',`image`='$filename',`street`='$str',`city`='$cty',`state`='sta',`zip code`='$zip' WHERE id='$id'";
		if (mysqli_query($con, $sql1)) {
			$_SESSION['page']='usersetting.php';
            $_SESSION['massage']='Your information has been saved successfully';
            header('Location:thankyou.php');
		}
		else {
		echo "Error: " . $sql . "" . mysqli_error($con);
	     }
    }
    else
    {
	/* Try to create the directory if it does not exist */             
	    $sql1 = "INSERT INTO `user_infromation`(`id`, `First Name`, `Email`, `About`, `image`,`street`, `city`, `state`, `zip code`)VALUES ('$id','fn','$em','$pn','$filename','$str','$cty','$sta','$zip')";
		if (mysqli_query($con, $sql1)) {
			$_SESSION['page']='usersetting.php';
            $_SESSION['massage']='Your information has been saved successfully';
            header('Location:thankyou.php');
		}
		else {
		echo "Error: " . $sql . "" . mysqli_error($con);
	     }
    }
     if (move_uploaded_file($tempname, $folder))  {
        
        $_SESSION['massage']='Your information has been saved successfully';
        header('Location:thankyou.php');
    }else{
        $_SESSION['massage']='Failed to upload image';
        header('Location:thankyou.php');
  }
}
?>