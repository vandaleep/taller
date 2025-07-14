<?php
	function idiomaEfe($palabra) {
		$res = "";
		for($i=0; $i<strlen($palabra); $i++) {
			//echo "$palabra[$i]<br>";
			if ($palabra[$i]=='a' ||
				$palabra[$i]=='e' ||
				$palabra[$i]=='i' ||
				$palabra[$i]=='o' ||
				$palabra[$i]=='u') {
				echo $palabra[$i].'f'.$palabra[$i];
			} else {
				echo $palabra[$i];
			}
		}
	}
?>
<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<?php idiomaEfe("hola mundo"); ?>
	</body>
</html>
	
