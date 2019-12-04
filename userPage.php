<?php
	include 'Model/User.php';
	session_start();
	if(!isset($_SESSION['an_user'])) header("location: index.php");
	include 'View/manodoceuehmuitapasta/index.html';
?>