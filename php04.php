<?php
	$nombre = $_POST["txtNombre"];
	$email = $_POST["txtEmail"];
	
	echo "REGISTRO EXITOSO<br>".
		"Bienvenido $nombre<br>";
?>

<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<form method="POST">
		   <label>Nombre:</label>
			<input name="txtNombre" required><br>
		   <label>email:</label>
			<input name="txtEmail" type="email" required><br>
			<input type="submit">
		</form>
	</body>
</html>
 
