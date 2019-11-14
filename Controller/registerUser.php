<?php 
	include_once 'config.php';  
	include_once $GLOBALS["project_path"].'/Model/Connect.class.php';
	include_once $GLOBALS["project_path"].'/Model/Manager.class.php';
	include_once $GLOBALS["project_path"].'/Model/User.php';
	session_start();

	//Recebe os valores e os insere no banco de dados
	$val = $_POST;
	foreach ($val as $key => $value) {
		$val[$key] = strip_tags($value);
	}
	$data = new Manager();
	try {
		$data->operation("INSERT INTO user_tb (nome, email, password) VALUES('".$val['nome']."', '".$val['email']."', '".password_hash($val['password'], PASSWORD_DEFAULT)."')");
		$id = $data->select("SELECT user_id FROM user_tb WHERE nome = '".$val['nome']."' AND email = '".$val['email']."'");
		$_SESSION['an_user'] = new User($id[0]['user_id'], $val['nome'], $val['email']);
		print_r($id);
		header("location: ".$GLOBALS['project_index']);
	} catch (PDOException $e) {
		header("location: ".$GLOBALS['project_index']."/registerForm.php?script=nop");
	}
?>