<?php
	session_start();
	if(isset($_SESSION['an_user'])) header("location: userPage.php");
	include 'View/maisumamano/index.php';
?>