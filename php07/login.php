<?php
	//La página viene de un envío POST
	if (isset($_POST["login"]) && isset($_POST["pass"])) {
		//TODO: Estos datos deben venir de una BD
		$loginValido = "admin";
		$passValido = "1234";
		
		//Credenciales válidas
		if($_POST["login"] == $loginValido
			&& $_POST["pass"] == $passValido) {
			setcookie("galletita", "EN_SESION", time() + (86400
* 30), "/");
			echo "<script>document.location.href='pagbien.php';</script>";
			die();
		} //Credenciales inválidas
		else {
			echo "<script>document.location.href='pagmal.html';</script>";
		}
	}
	//La página se carga por primera vez
	else {
		//Verificar si hay cookie válida
	}
?>

<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<form method="POST">
			<label>Login</label>
			<input name="login" required><br>
			<label>Password</label>
			<input type="password" name="pass" required><br>
			<input type="checkbox" name="recuerdame">Recuerdame
			<input type="submit" value="Entrar">
		</form>
	</body>
</html>
