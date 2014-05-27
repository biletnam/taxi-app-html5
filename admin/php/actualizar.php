<?php 
	$v1 = $_REQUEST["modelo"]; 
	$v2 = $_REQUEST["placa"];
	$v3 = $_REQUEST["conductor"]; 
	if($v3 == "" || $v2 == "" || $v1 == ""){
		header("Location:../cUnidades.php?msgF=no se modifico la unidad");
	}else{
		include '../incluir/conexion.php';
		$sql = "update unidad set modelo = '".$v1."', conductor = '".$v3."' where placa = '".$v2."'";
		mysql_query($sql, $conexion)or die("Error: ".mysql_error());
		header("Location:../cUnidades.php?msgG=Unidad Modificada");
	}
?>