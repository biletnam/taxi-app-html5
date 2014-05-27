<!doctype html> 
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Recibo</title>
	<link rel="stylesheet" type="text/css" href="../css/1.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			setTimeout(function() { 
				window.location.href = "../index.php";
			}, 10000); 
		});
	</script>
</head>
<body>
<?php 
	include '../incluir/conexion.php';
	$user="Desconocido";

	$origenee = $_REQUEST["origenee"];
	$destinoo = $_REQUEST["destinoo"];
	
	session_start();
	if(isset($_SESSION["usuarioooo"])){
		$user= $_SESSION["usuarioooo"];
	}else{
		$user = "Desconocido";
	}

	$fecha = "20".date("y-m-d");

	$sql = "select idUn from unidad;";
	$res = mysql_query($sql);
	$arre;
	$contador = 0;
	while ($fe = mysql_fetch_array($res)) {
		$arre[$contador] = $fe["idUn"];
		$contador++;
	}
	$cU = mt_rand(1, $contador);
	$unidad = "".$arre[$cU];
	$sql = "insert into pedidos(usuario, idUnidad, fecha, origen, destino)values('".$user."', '".$unidad."','".$fecha."', '".$origenee."', '".$destinoo."')";
	if(mysql_query($sql, $conexion)){
		echo "<h1 style='color:white;'>Su taxi fue pedido, espere por favor.</h1><p style='color:white;'>si no llega en menos de una hora comuniquese con nosotros</p>";
	}else{
		echo "error";
	}
?>
</body>
</html>