<!DOCTYPE html>
<html>
	<head>
		<title>Practica 4.1 Alvaro</title>
	</head>
	<body>
		<?php
			$a=0;
			for ($i = 1; $i <= 100; $i++){
				if ( ($i%2) == 1 ){
					echo "$i"."<br>";
					$a=$a+$i;	
				}
			}
			echo "Suma total:$a";
		?>
	</body>
</html>
