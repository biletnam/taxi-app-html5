<?php include 'incluir/header.zox'; ?>
<section>
	<?php 
	include "incluir/conexion.php";
	$sql= "select idP, usuario, idUnidad, fecha, origen, destino from pedidos";
	$res = mysql_query($sql, $conexion);
	echo "<center><table id='customers'>
			<tr>
				<th>Nº</th>
				<th>Usuario</th>
				<th>Unidad</th>
				<th>Fecha</th>
				<th>Proveniente de</th>
				<th>Destino</th>
			</tr>";
	while ($fila = mysql_fetch_array($res)) {
		echo "
		<tr>
			<td>".$fila["idP"]."</td>
			<td>".$fila["usuario"]."</td>
			<td>".$fila["idUnidad"]."</td>
			<td>".$fila["fecha"]."</td>
			<td>".$fila["origen"]."</td>
			<td>".$fila["destino"]."</td>
		</tr>";
	}
	echo "</table></center>";
	 ?>
</section>
<?php include 'incluir/footer.zox'; ?>
