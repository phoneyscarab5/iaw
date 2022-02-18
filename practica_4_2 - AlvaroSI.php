<!DOCTYPE html>
<html>
	<head>
		<title>Practica 421 Alvaro</title>
	</head>
	<body>
		<?php
			$a=0;
			for ($i = 1; $i <= 50; $i++){
				echo ($i*$i)."<br>";
				$a=($i*$i)+$a;
				}
			echo "Suma total: $a";
		?>
	</body>
</html>
