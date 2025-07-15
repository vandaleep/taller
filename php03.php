<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<!-- Generación dinámica de tarjetas -->
		<?php for ($i=0; $i<50; $i++): ?>
		  <div style="background-color:rgb(
		     <?php echo rand(0,255)?>,
		     <?php echo rand(0,255)?>,
		     <?php echo rand(0,255)?>
		  );width:30px; height:40px; text-align:center">
		    <p><?php echo $i+1;?></p>
		  </div>
	    <?php endfor ?>
	</body>
</html> 
