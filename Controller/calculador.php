<?php  
	$times = $gerente->select("SELECT nome AS time, colocacao FROM teams_tb ORDER BY colocacao");
	$acertos = 0;
	$distancia = 0;
	$i = 0; // Posições dos times no banco de dados
	foreach ($val as $key => $value) {
		if($key == $times[$i]['time']) $acertos++;
		$i++;
	}
	foreach ($val as $key => $value) {
		for($j = 0; $j < 20; $j++){
			if($key == $times[$j]['time']) $distancia += pow($value - ($j + 1), 2);
		}
	}
	$distancia = sqrt($distancia);

	$gerente->operation("UPDATE user_tb SET distancia = ".$distancia.", acertos = ".$acertos." WHERE user_id = ".$user_id);
?>