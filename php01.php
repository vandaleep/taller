<?php ini_set('display_errors', E_ALL);
	$meses=["Enero", "Febrero","Marzo",
		"Abril", "Mayo", "Junio", "Julio",
		"Agosto", "Septiembre", "Octubre",
		"Noviembre", "Diciembre"];
?> 
<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<h1>Lista de meses</h1>
		<ol>
			<?php
				foreach($meses as $mes) {
					echo "<li>$mes</li>";
				}
			?>
		</ol>
	</body>
</html>


