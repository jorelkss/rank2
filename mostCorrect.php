<?php
	include 'Model/Connect.class.php';
	include 'Model/Manager.class.php';
	include 'Model/User.php';
	session_start();
	$gerente = new Manager();
	$mais_acertantes = $gerente->select("SELECT nome, acertos FROM user_tb ORDER BY acertos DESC");
	$tamanho = sizeof($mais_acertantes);
	echo "<br>";
?>
<div class="list-group col-md-3">
	<li class="list-group-item list-group-item-active">Mais acertos &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" id="rank">➤</a></li>
	<?php for($i = 0; $i < $tamanho; $i++) { ?>
		<li class="list-group-item list-group-item-primary">#<?=$i+1?> <?=$mais_acertantes[$i]['nome']?></li>
	<?php } ?>
</div>
<script type="text/javascript">
    function callRight(){
        //$('#righttable').load('show.php');
        $('.rightdiv').toggleClass('rightDiv');
        $('.rightdiv2').toggleClass('rightDiv2');
        /*$('#rank2').off('click');
        $('#rank').on('click', callLeft);*/
    }
    
    $('#rank').on('click', callRight);
</script>
<br><br><br><br><br><br>