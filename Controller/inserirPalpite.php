<?php  
	include_once 'config.php';  
	include_once $GLOBALS["project_path"].'/Model/Connect.class.php';
	include_once $GLOBALS["project_path"].'/Model/Manager.class.php';
	include_once $GLOBALS["project_path"].'/Model/User.php';
	session_start();
	$val = $_POST;
	$gerente = new Manager();

	$user_id = $_SESSION['an_user']->getId(); 
	$i = 1;
	if($gerente->select("SELECT * FROM palpites WHERE user_id = ".$user_id)){
		foreach ($val as $key => $value) {
			$gerente->operation("UPDATE palpites SET user_id = ".$user_id.", time = '".$key."', colocacao = ".$i." WHERE time = '".$key."' AND user_id = ".$user_id);
			$val[$key] = $i;
			$i++;
		}
	}else{
		foreach ($val as $key => $value) {
			$gerente->operation("INSERT INTO palpites (user_id, time, colocacao) VALUES(".$user_id.", '".$key."', ".$i.")");
			$val[$key] = $i;
			$i++;
		}
	}
	include_once 'calculador.php';
	header("location: ".$project_index."/show.php");
?>