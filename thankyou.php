<?php
session_start();
$pag=$_SESSION['page'];
$msge=$_SESSION['massage'];
header("refresh:5; url=$pag");
?>

<!DOCTYPE html>
<html>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
  background-image: url('success.jpg');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}

.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

hr {
  margin: auto;
  width: 40%;
}
</style>
<body>

<div class="bgimg">
  <div class="topleft">
    <p>PRODUCT NEST</p>
  </div>
  <div class="middle">
    <h1><?php echo $msge?></h1>
    <hr>
    <p>You will be redirected after <span id = "lblCount"></span>&nbsp;seconds.</p>
  </div>
  <div class="bottomleft">
  </div>
</div>

<div id="dvCountDown" style = "display:none">
</div>
<script type="text/javascript">
    var seconds = 5;
    var dvCountDown = document.getElementById("dvCountDown");
    var lblCount = document.getElementById("lblCount");
    dvCountDown.style.display = "block";
    lblCount.innerHTML = seconds;
    setInterval(function () {
        seconds--;
        lblCount.innerHTML = seconds;
        if (seconds == 0) {
            dvCountDown.style.display = "none";
        }
    }, 1000);
</script>
</body>
</html>