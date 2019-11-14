<?php  
	
	include 'Model/Connect.class.php';
	include 'Model/Manager.class.php';

	$times = ['Flamengo', 'Palmeiras', 'Santos', 'Grêmio', 'São Paulo', 'Athletico-PR', 'Internacional', 'Corinthians', 'Bahia', 'Goiás', 'Vasco', 'Atlético-MG', 'Fortaleza', 'Botafogo', 'Ceará', 'Cruzeiro', 'Fluminense', 'CSA', 'Chapecoense', 'Avaí'];

	$gerente = new Manager();

	/*foreach ($times as $key => $value) {
		$gerente->operation("INSERT INTO teams_tb (nome, team_icon) VALUES('".$value."', '".$value.".png')");
	}*/

	/*for ($i=1; $i < 21; $i++) { 
		$gerente->operation("UPDATE teams_tb SET colocacao = ".$i." WHERE nome = '".$times[$i-1]."'");
	}*/

	echo "Acabou";


?>