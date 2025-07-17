<?php 
	$host = "localhost";
	$base = "pruebas";
	$usuario = "root";
	$pass = "toor"; //USBW: usbw, MAMP: root
	$datos = [];
	try {
		//Conectarme a BD
		$pdo = new PDO("mysql:host=$host;dbname=$base;charset=utf8mb4", $usuario, $pass);
		
		//Leer datos
		$query = "SELECT * FROM producto";
		$stmt = $pdo->prepare($query);
		$stmt->execute();
		$datos = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
	} catch (PDOException $e) {
		die("Error en la conexión: ". $e->getMessage());
	}
?>

<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<h1>Lista de productos</h1>
		<table border>
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Precio</th>
					<th>Descripcion</th>
				</tr>
			</thead>
			<tbody>
			  <?php foreach($datos as $reg): ?>
				<tr>
					<td><?php echo $reg["id_producto"] ?></td>
					<td><?php echo $reg["nombre"] ?></td>
					<td><?php echo $reg["precio"] ?></td>
					<td><?php echo $reg["descripcion"] ?></td>
				</tr>
			  <?php endforeach ?>
			</tbody>
		</table>
		<a href="php08_nuevo.php">Nuevo producto</a><br>
		<a href="php08_edicion.php">Edición masiva de precios</a>
	</body>
</html>
 
