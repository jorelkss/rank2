<?php
	include 'Model/Connect.class.php';
	include 'Model/Manager.class.php';
	try {
		$gerente = new Manager();
		$query = "SELECT ".$_POST['ins']." FROM user_tb WHERE ".$_POST['ins']." = '".$_POST['namae']."'";
		$consulta = $gerente->select($query);
		if($consulta) echo ucfirst($_POST['ins'])." já foi cadastrado";
	} catch (Exception $e) {
		echo $e->getMessage();
	}
?>