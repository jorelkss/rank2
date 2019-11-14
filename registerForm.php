<?php
	session_start();
	if(isset($_SESSION['an_user'])) header("location: table.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registre-se</title>
</head>
<body>
	<form action="Controller/registerUser.php" method="POST">
		<input type="text" name="nome" placeholder="Nome" required="">
		<input type="email" name="email" placeholder="Email" required="">
		<input type="password" name="password" placeholder="*****" required="">
		<input type="submit" name="">
	</form>
</body>
</html>