<?php  
	include 'Model/Connect.class.php';
	include 'Model/Manager.class.php';
	include 'Model/User.php';
	session_start();

	$gerente = new Manager();
	$fez_palpites = $gerente->select("SELECT * FROM palpites WHERE user_id = ".$_SESSION['an_user']->getId());
	if($fez_palpites){
		$times = $gerente->select("SELECT * FROM palpites WHERE user_id = ".$_SESSION['an_user']->getId()." ORDER BY colocacao");
		$colocacao = $gerente->select("SELECT nome AS time FROM teams_tb ORDER BY colocacao");
	}else{
		$times = $gerente->select("SELECT nome AS time FROM teams_tb ORDER BY colocacao");
	}

	$i = 0;
?>
<br>
<!--<script src="http://SortableJS.github.io/Sortable/Sortable.js"></script>-->
<?php if(!$fez_palpites){ ?>
<form action="Controller/inserirPalpite.php" method="POST">
	<ol id="my-list" class="list-group col">
	<?php foreach ($times as $key => $value) { ?>
		<li class="list-group-item"><img src="View/images/<?=$value['time']?>.png" height="40"><?=$value['time']?><input type="hidden" name="<?=$value['time']?>" value="0"></li>
	<?php } ?>
	</ol>

	<input type="submit" name="" value="Envia">
</form>
<?php }else{ ?>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Colocação</th>
				<th>Sua aposta</th>
				<th>Resultado oficial</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($times as $key => $value) { ?>
				<tr class="table-<?php echo $value['time'] == $colocacao[$i]['time'] ? 'success' : 'danger'; ?>">
					<td>#<?=$i + 1?></td>
					<td><img src="View/images/<?=$value['time']?>.png" height="40"> <?=$value['time']?></td>
					<td><img src="View/images/<?=$colocacao[$i]['time']?>.png" height="40"> <?=$colocacao[$i]['time']?></td>
				</tr>
				<?php $i++; ?>
			<?php } ?>
		</tbody>
	</table>
<?php } ?>
<br>
<?php if(!$fez_palpites){ ?>
<script type="text/javascript">
	var my_list = document.getElementById('my-list');
	new Sortable(my_list, {
		animation: 150,
		ghostClass: 'blue-background-class'
	});
</script>
<?php } ?>