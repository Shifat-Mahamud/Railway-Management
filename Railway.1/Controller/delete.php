<?php 

session_start();
require_once '../model/model.php';

$msg = '';
if (isset($_POST['submit'])){
	delete($_POST['id']);
}

?>