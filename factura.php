
	<html>
		<head>
		<title>Captura de datos</title>
		</head>	
		<body>
		<?php
				// declaracion de variables
				$cantidad1 = $_POST["cantidad1"];
				$descripcion1 = $_POST["descripcion1"];
				$precio1 = $_POST["precio1"];
				$cantidad2 = $_POST["cantidad2"];
				$descripcion2 = $_POST["descripcion2"];
				$precio2 = $_POST["precio2"];
				$cantidad3 = $_POST["cantidad3"];
				$descripcion3 = $_POST["descripcion3"];
				$precio3 = $_POST["precio3"];
				
				// constantes
				define('IVA', .16);
				define("resp", "<br>");
				define("n", "<br><br>");
				
				//importe
				$mult= $precio1 * $cantidad1;
				$mult1= $precio2 * $cantidad2;
				$mult2= $precio3 * $cantidad3;
				
				//desglose de precios
				$subtotal = $mult + $mult1 + $mult2;
				$iva = IVA * $subtotal;
				$total = $subtotal + $iva;
				
				echo "La descripcion de la factura es:","<br><br>";
				echo $cantidad1,"piezas ", $descripcion1," $ ",$precio1.resp;
				echo $cantidad2,"piezas ", $descripcion2," $ ",$precio2.resp;
				echo $cantidad3,"piezas ", $descripcion3," $ ",$precio3.n;
				
			    echo "Subtotal: ";
				echo $subtotal.resp;
				echo "IVA: ";
				echo $iva.resp;
				echo "TOTAL: ";
				echo $total;
				
				?>
		</body>
	</html>