<?php 
	$host = "localhost";
	$base = "pruebas";
	$usuario = "root";
	$pass = "toor"; //USBW: usbw, MAMP: root

	if (isset($_POST["nombre"])) {
		//Vamos a guardar datos
		$nombre = $_POST["nombre"];
		$precio = $_POST["precio"];
		$descripcion = $_POST["descripcion"] ?? "";
		
		//Abrir conexión a BD
		try {
			//Conectarme a BD
			$pdo = new PDO("mysql:host=$host;dbname=$base;charset=utf8mb4", $usuario, $pass);
			
			//Insertar registro
			$query = "INSERT INTO producto (nombre, precio, descripcion) VALUES (:nombre, :precio, :descripcion)";
			$stmt = $pdo->prepare($query);
			 $stmt->bindParam(":nombre", $nombre);
			 $stmt->bindParam(":precio", $precio);
			 $stmt->bindParam(":descripcion", $descripcion);
			$stmt->execute();
			echo "<h3>Registro insertado</h3>".
				"<a href='php08.php'>Regresar</a>";
			exit();
			
		} catch (PDOException $e) {
			die("Error en la conexión: ". $e->getMessage());
		}
	}
?>

<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<h1>Nuevo producto</h1>
		<form method="POST">
			<label>Nombre</label>
			<input name="nombre" required><br>
			<label>Precio</label>
			<input name="precio" type="number" required><br>
			<label>Descripcion</label>
			<input name="descripcion"><br>
			<input type="submit" value="Guardar">
		</form>
		<a href="php08.php">Cancelar</a><br>
	</body>
</html>
 
