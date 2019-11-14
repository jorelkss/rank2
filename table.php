<?php  
	include 'Model/Connect.class.php';
	include 'Model/Manager.class.php';
	include 'Model/User.php';
	session_start();

	$gerente = new Manager();
	if($gerente->select("SELECT * FROM palpites WHERE user_id = ".$_SESSION['an_user']->getId())){
		$times = $gerente->select("SELECT * FROM palpites WHERE user_id = ".$_SESSION['an_user']->getId()." ORDER BY colocacao");
	}else{
		$times = $gerente->select("SELECT nome AS time FROM teams_tb");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="http://SortableJS.github.io/Sortable/Sortable.js"></script>
</head>
<body>
	<form action="Controller/inserirPalpite.php" method="POST">
		<ol id="my-list" class="list-group col">
		<?php foreach ($times as $key => $value) { ?>
			<li class="list-group-item"><img src="View/images/<?=$value['time']?>.png" height="40"><?=$value['time']?><input type="hidden" name="<?=$value['time']?>" value="0"></li>
		<?php } ?>
		</ol>

		<input type="submit" name="" value="Envia">
	</form>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-sortablejs@latest/jquery-sortable.js"></script>
	<script type="text/javascript">
		var my_list = document.getElementById('my-list');
		new Sortable(my_list, {
			animation: 150,
			ghostClass: 'blue-background-class'
		});
	</script>
</body>
</html>