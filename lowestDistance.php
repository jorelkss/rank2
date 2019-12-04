<?php
	include 'Model/Connect.class.php';
	include 'Model/Manager.class.php';
	include 'Model/User.php';
	session_start();
	$gerente = new Manager();
	$menos_distantes = $gerente->select("SELECT nome, distancia FROM user_tb ORDER BY distancia");
	$tamanho = sizeof($menos_distantes);
	echo "<br>";
?>
<!--
<table class="table table-hover table-bordered table-primary">
	<thead>
		<tr class="table-light">
			<th style="border: 0.5px solid black">Colocação</th>
			<th style="border: 0.5px solid black">Mais Acertos</th>
			<th style="border: 0.5px solid black">Menor distância</th>
		</tr>
	</thead>
	<tbody>
		<?php for($i = 0; $i < $tamanho; $i++){ ?>
			<tr style="border: 0.5px solid black">
				<td style="border: 0.5px solid black">#<?=$i+1?></td>
				<td style="border: 0.5px solid black"><?=$mais_acertantes[$i]['nome']?></td>
				<td style="border: 0.5px solid black"><?=$menos_distantes[$i]['nome']?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>-->
<div class="list-group list-group col-md-3">
	<div class="list-group-item list-group-item-active">Menor distância &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" id="rank2">➤</a></div>
	<?php for($i = 0; $i < $tamanho; $i++) { ?>
		<div class="list-group-item list-group-item-primary">#<?=$i+1?> <?=$menos_distantes[$i]['nome']?></div>
	<?php } ?>
</div>
<script type="text/javascript">
	function callLeft(){
        //$('#lefttable').load('table.php');
        $('.rightdiv').toggleClass('rightDiv');
        $('.rightdiv2').toggleClass('rightDiv2');
        /*$('#rank').off('click');
        $('#rank2').on('click', callRight);*/
    }

    $('#rank2').on('click', callLeft);
</script>
<br><br><br><br><br><br>