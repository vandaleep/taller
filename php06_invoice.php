<?php
	$ids = ["67"=>67, "78"=>78, "34"=>34, "12"=>12];
	$prods = ["67"=>"leche","78"=>"huevo","34"=>"pan","12"=>"mamut"];
	$precios = ["67"=>32, "78"=>40, "34"=>45, "12"=>12];
	
	$total = 0;
	
	echo "<p>Compraste:</p>";
	for ($i=0; $i<count($_POST); $i++) {
		$id = $_POST["prod".$i];
		echo "<li>".$prods[$id]." - ".$precios[$id]."</li>";
		$total = $total + $precios[$id];
	}
	echo "<p>Total a pagar: $total</p>";
?> 
