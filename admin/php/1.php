<?php
	include '../incluir/conexion.php'; 
	$sql = "delete from unidad where idUn = '".$_GET["id"]."'";
	mysql_query($sql, $conexion);
	header("location:../cUnidades.php");
 ?>