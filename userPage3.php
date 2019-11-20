<?php
	session_start();
	if(!isset($_SESSION['an_user'])) header("location: index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="View/css/style.css">
	<script src="http://SortableJS.github.io/Sortable/Sortable.js"></script>
	<script type="text/javascript">
		$(document).ready(function (){
			$('#table').load('table.php');
		});
	</script>
	<script type="text/javascript" src="View/js/style.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">Bet666</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="#" onclick="loadTeams('table')">Tabela de Times</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#" onclick="loadRank('show')">Rank</a>
	      </li>
	    </ul>
	  </div>
	</nav>
	<div class="container" id="table">
		
	</div>
	<!--<script type="text/javascript">
		var my_list = document.getElementById('my-list');
		new Sortable(my_list, {
			animation: 150,
			ghostClass: 'blue-background-class'
		});
	</script>-->
</body>
</html>