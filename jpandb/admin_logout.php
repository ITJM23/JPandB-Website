<?php


if (isset($_GET['logout'])) {

	session_destroy();
	header("location:adminlogin.php");
	# code...
}





?>