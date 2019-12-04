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
?>
<br>
<!--<script src="http://SortableJS.github.io/Sortable/Sortable.js"></script>-->
<?php if(!$fez_palpites){ ?>
<form action="Controller/inserirPalpite.php" method="POST">
	<ol id="my-list" class="list-group col-md-3">
	<?php foreach ($times as $key => $value) { ?>
		<li class="list-group-item"><img src="View/images/<?=$value['time']?>.png" height="40"><?=$value['time']?><input type="hidden" name="<?=$value['time']?>" value="0"></li>
	<?php } ?>
	</ol>

	<input type="submit" name="" value="Envia">
</form>
<br><br><br><br>
<?php }else{ ?>
	<!--<table class="table table-hover table-bordered table-primary" style="overflow-y: scroll;">
		<thead>
			<tr>
				<th scope="col">Sua aposta</th>
				<th scope="col">Resultado oficial</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 0; ?>
			<?php foreach ($times as $key => $value) { ?>
				<tr class="table-<?php echo $value['time'] == $colocacao[$i]['time'] ? 'success' : 'danger'; ?>">
					<td><img src="View/images/<?=$value['time']?>.png" height="40"> <span><?=$value['time']?></span></td>
					<td><img src="View/images/<?=$colocacao[$i]['time']?>.png" height="40"> <span><?=$colocacao[$i]['time']?></span></td>
				</tr>
				<?php $i++; ?>
			<?php } ?>
		</tbody>
	</table>-->
	<div class="list-group col-md-3" id="a_list">
		<button class="list-group-item list-group-item-action disabled">
			Palpite
		</button>
		<?php $i = 0; ?>
	<?php foreach ($times as $key => $value) { ?>
		<button class="list-group-item list-group-item-action list-group-item-<?php echo $value['time'] == $colocacao[$i]['time'] ? 'success' : 'danger'; ?>" data-toggle="popover" title="Resultado oficial" data-content="<img src='View/images/<?=$colocacao[$i]['time']?>.png' height='40'><span> &nbsp;&nbsp;&nbsp;<?=$colocacao[$i]['time']?></span>">
			<img src='View/images/<?=$value['time']?>.png' height='40'><span> &nbsp;&nbsp;&nbsp;&nbsp;<?=$value['time']?></span>
		</button>
		<?php $i++; ?>
	<?php } ?>
	</div>
	<br><br><br>
<?php } ?>
<br><br>
<?php if(!$fez_palpites){ ?>
<script type="text/javascript">
	var my_list = document.getElementById('my-list');
	new Sortable(my_list, {
		animation: 150,
		ghostClass: 'blue-background-class'
	});
</script>
<?php }else{ ?>
<script type="text/javascript">
	$(function () {
	  $('[data-toggle="popover"]').popover({
	  	html: true,
	  	trigger: 'hover'
	  })
	})
</script>	
<?php } ?>

<br><br>