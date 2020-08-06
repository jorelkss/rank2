<?php
	include_once 'config.php';  
	include_once $GLOBALS["project_path"].'/Model/Connect.class.php';
	include_once $GLOBALS["project_path"].'/Model/Manager.class.php';
	include_once $GLOBALS["project_path"].'/Model/User.php';

	session_start();
	
	$val = $_POST;
	$data = new Manager();
	$dados = $data->select("SELECT * FROM user_tb WHERE email = '".$val['email']."'");

	if($dados){
		if(password_verify($val['password'], $dados[0]['password'])){
			$user = new User($dados[0]['user_id'], $dados[0]['nome'], $dados[0]['email']);
			$_SESSION['an_user'] = $user; // Coloca os dados do usuário da sessão
			header("location: ".$GLOBALS['project_index']);
		}
	}
	
	header("location: ".$GLOBALS['project_index']);
?>
