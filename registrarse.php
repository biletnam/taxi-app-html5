<?php include 'incluir/header.zox'; ?>
<section>
	<br><br>
	<center>
			<?php 
			if(isset($_GET["msgF"])){
				echo "<p style='color:red;'>"."
				".$_GET["msgF"]."</p>";
			}if(isset($_GET["msgG"])){
				echo "<p style='color:green;'>".$_GET["msgG"]."</p>";
			}
			 ?>
	</center>
	<center><form action="php/1.php" method="post">
		<table>
		<tr>
			<td>Nombre Completo: </td>
			<td><input type="text" placeholder="Ej. Roberto Perez" class="formr" name="nombreF"></td>
		</tr><tr>
			<td>Direccion: </td>
			<td><input type="text" placeholder="Ej. Av Madero" class="formr" name="direF"></td>
		</tr><tr>
			<td>Telefono: </td>
			<td><input type="text" placeholder="Ej. 4431111219" class="formr" name="teleF"></td>
		</tr><tr>
			<td>Usuario: </td>
			<td><input type="text" placeholder="Ej. Dakore" class="formr" name="userF"></td>
		</tr><tr>
			<td>Contraseña: </td>
			<td><input type="password" class="formr" name="passF"></td>
		</tr><tr>
			<td colspan="2"><center><input type="submit" value="Registrate" class="envFormm" id="asff"></center></td><td></td>
		</tr>
	</table>
	</form></center>
</section>
<?php include 'incluir/footer.zox'; ?>