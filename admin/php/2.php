<?php
	include '../incluir/conexion.php'; 
	$sql = "delete from usuarios where idU = '".$_GET["id"]."'";
	mysql_query($sql, $conexion);
	header("location:../cUsuarios.php");
 ?>