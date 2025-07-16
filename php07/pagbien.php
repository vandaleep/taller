<?php
	//Esta pagina solo se carga SI y solo SI
	//Hay una cookie válida
	if (!(isset($_COOKIE["galletita"]) && $_COOKIE["galletita"] == "EN_SESION")) {
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
		</form>
	</body>
</html> 
