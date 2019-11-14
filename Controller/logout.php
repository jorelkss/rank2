<?php 
	include_once 'config.php';  
	session_start();
	
	session_unset();
	session_destroy();
	header("location: ".$GLOBALS['project_index']);

	//Finaliza a sessão
?>