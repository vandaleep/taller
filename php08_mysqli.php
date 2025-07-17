<?php 
	$host = "localhost";
	$base = "pruebas";
	$usuario = "root";
	$pass = "toor"; //USBW: usbw, MAMP: root
	//Conectar a la BD
	$cnx = mysqli_connect($host, $usuario, $pass, $base)
		or die("Error en la conexión a MySql");
	//Comprueba la conexión
	if (mysqli_connect_errno()) {
		printf("La conexión falló: %s\n", mysqli_connect_error());
		exit();
	}
	echo "Conexión exitosa";
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
				<tr>
					<td>foo</td>
					<td>foo</td>
					<td>foo</td>
					<td>foo</td>
				</tr>
			</tbody>
		</table>
	</body>
</html>
 
