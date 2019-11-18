<?php
	session_start();
	if(!isset($_SESSION['an_user'])) header("location: index.php");
	include 'View/pasta/index.html';
?>