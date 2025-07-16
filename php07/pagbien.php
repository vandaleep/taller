<?php
	//Esta pagina solo se carga SI y solo SI hay una cookie válida... salvo que venga de POST
	if (isset($_POST["accion"]) && $_POST["accion"] == "SALIR") {
		//Destruir cookie
		setcookie("galletita", "EN_SESION", time() - 1, "/");
		echo "<script>document.location.href='login.php';</script>";
		die();
	}
	else if (!(isset($_COOKIE["galletita"]) && $_COOKIE["galletita"] == "EN_SESION")) {
		echo "<script>document.location.href='pagmal.html';</script>";
		die();
	}
?>

<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<form method="POST">
			<h1>BIENVENIDO</h1>
			<input type="submit" value="Salir">
			<input type="hidden" name="accion" value="SALIR">
		</form>
	</body>
</html> 
