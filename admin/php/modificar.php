<!doctype html> 
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Recibo</title>
	<link rel="stylesheet" type="text/css" href="../css/1.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
	<section>
		<?php 
			$v1 = $_REQUEST["modelo"]; 
			$v2 = $_REQUEST["placa"];
			$v3 = $_REQUEST["conductor"]; 

			include '../incluir/conexion.php';
			$sql = "select idUn, modelo, placa, conductor from unidad where placa = '".$v2."'";
			$resultado = mysql_query($sql, $conexion);
			echo "<br><center><form action='actualizar.php' method='post'>";
			while ($fila = mysql_fetch_array($resultado)) {
			
				echo "<input name='modelo' value='".$v1."'><br>";
				echo "<input name='placa' value='".$v2."' readonly><br>";
				echo "<input name='conductor' value='".$v3."'><br>";
				echo "<input type='submit' value='modificar'>";
				echo "<a href='../cUnidades.php'><input type='button' value='cancelar'></a>";
			}
			echo "</form><center>";
		?>
	</section>
</body>
</html>