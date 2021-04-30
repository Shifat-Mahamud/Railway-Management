<html>
<head>
	<style >
		.color{
			color: red;
		}
	</style>
<title>RegisterPage</title>
</head>
<body style=" background-image: url(regisimg.jpg);
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
	
<?php 
require_once ("../controller/registration.php");
include "header.php";

?>
<h1 align="center" style="color:white">Register Form</h1>
<form name="regForm" align="center" method="post">
<?php 
if (isset($error)) {
	echo '<span class = color>' .$error. '</span>';
}
?>
<br>
Full name : <input class="textBox" type="text" name="fname" placeholder="Enter your Full name"><br><br>
Username : <input class="textBox" type="text" name="uname" placeholder="Enter your  Username"><br><br>
Password : <input class="textBox" type="password" name="password" placeholder="Enter your Password"><br><br>
Confirm Password : <input class="textBox" type="password" name="confirmPassword" placeholder="Enter your Password Again"><br><br>
Email : <input class="textBox" type="text" name="email" placeholder="Enter your Email"><br><br>
<b>Gender</b>
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female"> Female<br><br>
Date of Birth : <input type="date" name="dob"><br><br>
Phone Number : <input class="textBox" type="text" name="phone" placeholder="Enter your Phone Number"><br><br>

<input type ="submit" name="submit" value="Register"><br>
<?php 
if (isset($message)) {
	echo $message ;
}
?>
</form>
</body>
</html>