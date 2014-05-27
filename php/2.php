<?php 
	$v11 = $_REQUEST["user"];
	$v12 = $_REQUEST["pass"];
	if($v11 == "" || $v12 == ""){
		echo '
		<script type="text/javascript">
			alert("campos vacios");
			windows.location.href="../index.php";
		</script>';
	}else{
		include '../incluir/conexion.php';
		$sql = "select count(*)as conteo, tipo from usuarios where user = '".$v11."' && pass = '".$v12."'";
		$ress = mysql_query($sql, $conexion);
		$fff = mysql_fetch_array($ress);
		if($fff["conteo"] == "0"){
			header("location:../index.php");
		}else{
			session_start();
			$_SESSION["tipoooo"] = $fff["tipo"];
			$_SESSION["usuarioooo"] = $v11;
			if($_SESSION["tipoooo"] == "administrador"){
				header("location:../admin/index.php");
			}else{
				header("location:../index.php");
			}
		}
	}
?>
