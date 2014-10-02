
	<html>
		<head>
		<title>Captura de datos</title>
		</head>	
		<body>
		<?php
				// declaracion de variables
				$cantidad1 = $_POST["cantidad1"];
				$precio1 = $_POST["precio1"];
				$cantidad2 = $_POST["cantidad2"];
				$precio2 = $_POST["precio2"];
				$cantidad3 = $_POST["cantidad3"];
				$precio3 = $_POST["precio3"];
				
				// constantes
				define('IVA', .16);
				define("resp", "<br>");
				
				//importe
				$mult= $precio1 * $cantidad1;
				$mult1= $precio2 * $cantidad2;
				$mult2= $precio3 * $cantidad3;
				
				//desglose de precios
				$subtotal = $mult + $mult1 + $mult2;
				$iva = IVA * $subtotal;
				$total = $subtotal + $iva;
				
				echo "La descripcion de la factura es:","<br><br>";
				echo "Subtotal: ";
				echo $subtotal, "<br>";
				echo "IVA: ";
				echo $iva,"<br>";
				echo "TOTAL: ";
				echo $total;
				
				?>
		</body>
	</html>