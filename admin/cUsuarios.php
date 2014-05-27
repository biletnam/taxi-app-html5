<?php include 'incluir/header.zox'; ?>
<section>
<?php 
	include "incluir/conexion.php";
	$sql= "select idU, nombre, direccion, telefono, user, pass from usuarios where tipo != 'administrador'";
	$res = mysql_query($sql, $conexion);
	echo "<center><table id='customers'>
			<tr>
				<th>Borrar</th>
				<th>Nombre</th>
				<th>Direccion</th>
				<th>Telefono</th>
				<th>User</th>
				<th>Pass</th>
			</tr>";
	while ($fila = mysql_fetch_array($res)) {
		echo "
		<tr>
			<td><a href='php/2.php?id=".$fila["idU"]."'><img src='recursos/borrar.png'></a></td>
			<td>".$fila["nombre"]."</td>
			<td>".$fila["direccion"]."</td>
			<td>".$fila["telefono"]."</td>
			<td>".$fila["user"]."</td>
			<td>".$fila["pass"]."</td>
		</tr>";
	}
	echo "</table></center>";
	 ?>	
</section>
<?php include 'incluir/footer.zox'; ?>