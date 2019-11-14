<?php
	include 'Model/User.php';
	session_start();
	if(isset($_SESSION['an_user'])) echo "Bem-vindo ".$_SESSION['an_user']->getNome()."";
?>