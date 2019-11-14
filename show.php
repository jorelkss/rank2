<?php
	include 'Model/Connect.class.php';
	include 'Model/Manager.class.php';
	include 'Model/User.php';
	session_start();
	$gerente = new Manager();
	$menos_distantes = $gerente->select("SELECT nome, distancia FROM user_tb ORDER BY distancia");
	$mais_acertantes = $gerente->select("SELECT nome, acertos FROM user_tb ORDER BY acertos DESC");
	$tamanho = sizeof($menos_distantes);
	if(isset($_SESSION['an_user'])) echo "Bem-vindo ".$_SESSION['an_user']->getNome()."<br>";
?>
<table>
	<thead>
		<tr>
			<th>Colocação</th>
			<th>Mais Acertos</th>
			<th>Menor distância</th>
		</tr>
	</thead>
	<tbody>
		<?php for($i = 0; $i < $tamanho; $i++){ ?>
			<tr>
				<td>#<?=$i+1?></td>
				<td><?=$mais_acertantes[$i]['nome']?></td>
				<td><?=$menos_distantes[$i]['nome']?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>

<a href="Controller/logout.php">logout</a>