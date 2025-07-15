<?php
	$ids = [67, 78, 34, 12];
	$prods = ["leche","huevo","pan","mamut"];
	$precios = [32, 40, 45, 12];
?>
<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<p>Selecciona los productos a comprar</p>
		<form method="POST" action="php06_invoice.php">
		  <ol>
			 <?php for($j=0; $j<5; $j++): ?>
			   <li><select name="prod<?php echo $j?>">
			   <?php for($i=0; $i<count($prods); $i++): ?>
					<option value="<?php echo $ids[$i]?>">
						<?php echo $prods[$i]?>
					</option>
			   <?php endfor ?>
			   </select></li>
			 <?php endfor?>
		  </ol>
		  <input type="submit">
		</form>
	</body>
</html>
