<?php 
	$v1 = $_REQUEST["nombreF"];
	$v2 = $_REQUEST["direF"];
	$v3 = $_REQUEST["teleF"];
	$v4 = $_REQUEST["userF"];
	$v5 = $_REQUEST["passF"];

	if($v1=="" || $v2=="" || $v3=="" || $v4=="" || $v5==""){
		header("location:../registrarse.php?msgF=Campos Vacios");
	}else{

	include '../incluir/conexion.php';
	$sql = "select count(*)as conteo from usuarios where user = '".$v4."' && pass = '".$v5."';";
	$res = mysql_query($sql, $conexion);
	$extra = mysql_fetch_array($res);
	if($extra["conteo"] == "0"){
		$sql = "insert into  usuarios(nombre, direccion, telefono, user, pass)values('".$v1."', '".$v2."', '".$v3."', '".$v4."', '".$v5."')";
		mysql_query($sql, $conexion);
		header("location:../registrarse.php?msgG=El usuario se ha registrado");
	}else{
		header("location:../registrarse.php?msgF=El usuario ya esta registrado");
	}

}
?>