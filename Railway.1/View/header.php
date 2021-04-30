
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="row">
  <div class="column" >
  </div>
  <div class="column alignRight" >
    <?php
    if (isset($_SESSION['uname'])) {
    	echo '<a href="ALLDATA.php">Train Scedule . | .</a>
        <a href="TRAININSERT.php">Insert Data . | .</a>
        <a href="logout.php">Logout . | .</a>'; 
    }else{
        echo '<a href="LOGIN.php">Login . | .</a>
        <a href="REGISTRATION.php">Registration . | .</a> 
        <a href="HOMEPAGE.php">Home . | .</a>';   
    }
    ?>
  </div>
  
</div>
<div class="menu">
</div>

</body>
</html>
