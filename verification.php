<?php
	include 'Model/Connect.class.php';
	include 'Model/Manager.class.php';

	$gerente = new Manager();

	if(isset($_GET['ins']) && isset($_GET['namae'])){
		$query = "SELECT ".$_GET['ins']." FROM user_tb WHERE ".$_GET['ins']." = '".$_GET['namae']."'";

		$consulta = $gerente->select($query);

		if($consulta) echo ucfirst($_GET['ins'])." já foi cadastrado";
	}
?>