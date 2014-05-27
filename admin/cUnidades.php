<?php include 'incluir/header.zox'; ?>
<section>
	<br>
		<?php
			if(isset($_GET['msgF'])){
				echo "<p style='color:red; text-align:center;'>".$_GET['msgF']."</p>";
			}
			if(isset($_GET['msgG'])){
				echo "<p style='color:green; text-align:center;'>".$_GET['msgG']."</p>";
			}
		?>
	<div id='formaa'>
		<hr>
		<h2>Agrega una nueva unidad</h2>
	<form action="php/agregar.php" method='post'>
		<input type="text" name="modelo" placeholder="Ingrese su modelo">
		<input type="text" name="placa" placeholder="Ingrese su placa">
		<input type="text" name="conductor" placeholder="Ingrese su conductor">
		<input type="submit" value='Dar de alta'>
		<input type="reset">
	</form>
	</div>
	<hr>
	<?php 
	include "incluir/conexion.php";
	$sql= "select idUn, modelo, placa, conductor from unidad";
	$res = mysql_query($sql, $conexion);
	echo "<center><h2>Elimina y Modifica unidades</h2>
	<table id='customers'>
			<tr>
				<th>Borrar</th>
				<th>Modificar</th>
				<th>Modelo</th>
				<th>Placa</th>
				<th>Conductor</th>
			</tr>";
	while ($fila = mysql_fetch_array($res)) {
		echo "
		<tr><form method='post' action='php/modificar.php'>
			<td><a href='php/1.php?id=".$fila["idUn"]."'><img src='recursos/borrar.png'></a></td>
			<td><input type='submit' class='inputEnviar'></td>
			<td><input type='text' name='modelo' value='".$fila["modelo"]."' class='inputTabla'></td>
			<td><input type='text' name='placa' value='".$fila["placa"]."' class='inputTabla' readonly></td>
			<td><input type='text' name='conductor' value='".$fila["conductor"]."' class='inputTabla'></td>
		</form></tr>";
	}
	echo "</table></center>";
	 ?>
</section>
<?php include 'incluir/footer.zox'; ?>