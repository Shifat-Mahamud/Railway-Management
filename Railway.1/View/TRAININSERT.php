
<?php 
require_once ("../controller/trainInsert.php");
include "header.php";

if (isset($_SESSION['uname'])) {
       include 'trainInfo.php';  
}
else{
    $msg="error";
    header("location:login.php");
  }

?>


