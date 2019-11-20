<?php
	/*session_start();
	if(!isset($_SESSION['user']) && $_SESSION['user']->getId() != 1){ // apenas administradores
		header('location: '.$project_index);
	}*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Adicionar Elenco</title>
	<link href="View/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript">
		function verification(name, est){
		    //let form = document.getElementById("");
		    const formdata = new FormData(form);
		    let nameInp = document.getElementById(inpt);
		    //let butao = document.getElementById('jorel');
		    //let butao = document.getElementsById('butao').innerHTML = "";;
		        //POST 
		        fetch("verificator.php",{
		            method: "GET",
		            body: formdata
		        })
		        //GET fetch("verification.php?namae="+name+"&ins="+ins)
		        .then((response)=>{
		            check();
		            return response.text();
		        })
		        .then((res)=>{
		            console.log(res);
		            nameInp.innerHTML = res;
		        })   
		}

		function modifier(str){
			var val = "";
			if(str == "Ator ou da Atriz"){
				val = '<label for="exampleFormControlInput1">Nome do '+ str +'</label><input type="text" class="form-control" id="exampleFormControlInput1" name="nome" onkeyup="verification(this.value, '+"'actor'"+')">';
			}
			if(str == "Diretor ou da Diretora"){
				val = '<label for="exampleFormControlInput1">Nome do '+ str +'</label><input type="text" class="form-control" id="exampleFormControlInput1" name="nome" onkeyup="verification(this.value, '+"'director'"+')">';
			}
			else{
				val = '<label for="exampleFormControlInput1">Nome do '+ str +'</label><input type="text" class="form-control" id="exampleFormControlInput1" name="nome" onkeyup="verification(this.value, '+"'v_actor'"+')">';
			}
			console.log(val);
			document.getElementById("labela").innerHTML = val;
		}
	</script>
</head>
<body>
	<div class="container">
		<form>
		  <div class="form-group">
		  	<label>Adicionar Elenco para filme "<?=$_GET['movie']?>"</label>
		  </div>
		  <div class="form-group">
		  	<select>
		  		<option onclick="modifier('Ator ou da Atriz')">Ator ou Atriz</option>
		  		<option onclick="modifier('Diretor ou da Diretora')">Diretor ou Diretora</option>
		  		<option onclick="modifier('Dublador ou da Dubladora')">Dublador ou Dubladora</option>
		  	</select>
		  </div>
		  <div class="form-group" id="labela">
		    <label for="exampleFormControlInput1">Nome do Ator ou da Atriz</label>
		    <input type="text" class="form-control" id="exampleFormControlInput1" name="nome" onkeyup="verification(this.value, 'actor')">
		  </div>
		</form>
		<div class="form-group" id="links">
		  	
		</div>
	</div>
</body>
</html>