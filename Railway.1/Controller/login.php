<?php 

session_start();
require_once '../model/model.php';

$uname="";
$password="";
$msg = '';
if (isset($_POST['login'])){
	$uname = $_POST['uname'];
	$password = $_POST['password'];
	$rowCount = userLogin($uname, $password);
	if ($rowCount == 1) {
		$_SESSION['uname'] = $uname;  
		header("location: ALLDATA.php");
	}
	else{
		$msg="username or password invalid";
	}

}
?>