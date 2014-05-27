<?php 
	$v1 = $_REQUEST["modelo"]; 
	$v2 = $_REQUEST["placa"];
	$v3 = $_REQUEST["conductor"]; 
	if($v3 == "" || $v2 == "" || $v1 == ""){
		header("Location:../cUnidades.php?msgF=Campos vacios");
	}else{
		include '../incluir/conexion.php';
		$sql = "insert into unidad(modelo, placa, conductor)values('".$v1."', '".$v2."', '".$v3."')";
		mysql_query($sql, $conexion);
		header("Location:../cUnidades.php?msgG=Unidad registrado");
	}
?>