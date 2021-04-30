<html>
<head>
<title>Login Page</title>
</head>
<body style=" background-image: url(1200px-Subarna_Express.jpg);
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
	
<?php 
require_once ("../controller/login.php");
include "header.php";
?>

<h1 align="center"> Welcome to Bangladesh Railway </h1>
<h3 align="center"> Login or Register</h3>
<form action ="" method="post" name="loginForm" align="center">

<?php 
if(isset($msg))
    {
        echo $msg;
    }
    ?>
	<br><br>
Username :
<input class="textBox" type="text" name="uname" placeholder="Username"><br><br>
Password :
<input class="textBox" type="password" name ="password" placeholder="Password"><br><br>
<input type ="submit" name="login" value="Log In" style="color:blue ">
<a href="REGISTRATION.php"><input type="button" value ="Register" style="color:blue "></a>
</form>
</body>
</html>