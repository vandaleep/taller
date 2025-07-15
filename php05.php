<?php
	//Verificar que venga de un envío
	if (!isset($_POST["prod1"])) {
		echo "Esta página debe venir de un envío de información";
		die();
	}
	
	$prod1 = $_POST["prod1"];
	//EV: FALSEY Si la var existe, la usa, sino usa ""
	$prod2 = $_POST["prod2"] ?? "";
	$prod3 = $_POST["prod3"] ?? "";
	$prod4 = $_POST["prod4"] ?? "";
	$prod5 = $_POST["prod5"] ?? "";
	
	echo "<p>Debes comprar:</p><li>$prod1</li><li>$prod2</li><li>$prod3</li><li>$prod4</li><li>$prod5</li></p>";
?>
