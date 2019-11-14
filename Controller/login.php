<?php
	include_once 'config.php';  
	include_once $GLOBALS["project_path"].'/Model/Connect.class.php';
	include_once $GLOBALS["project_path"].'/Model/Manager.class.php';
	include_once $GLOBALS["project_path"].'/Model/User.php';

	session_start();
	
	$val = $_POST;
	$data = new Manager();
	$dados = $data->select("SELECT * FROM user_tb"); // Carrega os usuarios
	
	foreach ($dados as $dat) {
		if($dat['email'] == $val['email']){ // Verifica se encontra um usuario com o email
			if(password_verify($val['password'], $dat['password'])){ // Verifica se a senha está correta
				$user = new User($dat['user_id'], $dat['nome'], $dat['email']);
				$_SESSION['an_user'] = $user; // Coloca os dados do usuário da sessão
				header("location: ".$GLOBALS['project_index']);
			}
		}
	}
	header("location: ".$GLOBALS['project_index']);
?>