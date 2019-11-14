<?php
	session_start();
	if(isset($_SESSION['an_user'])) header("location: table.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - Teste</title>
</head>
<body>
	<form action="Controller/login.php" method="POST">
		<input type="text" name="email" placeholder="Email">
		<input type="password" name="password" placeholder="*****">
		<input type="submit" name="" value="Enviar">
	</form>
	<a href="registerForm.php">Registre-se</a>
</body>
</html>