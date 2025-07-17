<?php 
	$host = "localhost";
	$base = "pruebas";
	$usuario = "root";
	$pass = "toor"; //USBW: usbw, MAMP: root
	$datos = [];
	
	//Viene de envio datos POST
	if( isset($_POST["id0"]) ) {
		$pdo = null;
		try {
		//Conectarme a BD
			$pdo = new PDO("mysql:host=$host;dbname=$base;charset=utf8mb4", $usuario, $pass);
		} catch (PDOException $e) {
			die("Error en la conexión: ". $e->getMessage());
		}
		
		$query = "UPDATE producto SET precio=:precio WHERE id_producto=:id";
		for ($i=0; $i<count($_POST)/2; $i++) {
			try {
				$stmt = $pdo->prepare($query);
				$stmt->bindParam(":id", $_POST["id$i"]);
				$stmt->bindParam(":precio", $_POST["precio$i"]);
				$stmt->execute();
			} catch (PDOException $e) {
				die("Error en la conexión: ". $e->getMessage());
			}
		}
		echo "<h3>Registros actualizados</h3><a href='php08.php'>Regresar</a>";
		exit();
	}
	
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
		<h1>Editar precios de productos</h1>
		<form method="POST">
			<table border>
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Precio</th>
					</tr>
				</thead>
				<tbody>
				  <?php $i=0; ?>
				  <?php foreach($datos as $reg): ?>
					<tr>
						<td><?php echo $reg["id_producto"] ?><input name='<?php echo "id$i" ?>' type="hidden" value='<?php echo $reg["id_producto"] ?>'></td>
						<td><?php echo $reg["nombre"] ?></td>
						<td><input name='<?php echo "precio$i" ?>' value='<?php echo $reg["precio"] ?>'></td>
					</tr>
				  <?php $i++; ?>
				  <?php endforeach ?>
				</tbody>
			</table>
			<input type="submit" value="Guardar">
		</form>
		<a href="php08.php">Cancelar</a><br>
	</body>
</html>
 
