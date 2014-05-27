<?php include 'incluir/header.zox'; ?>
<section>
	<br><br><br>
	<article id="a1">
		<h1>Servicio de Taxys</h1>
		<hr>
		<p>
			Aqui usted podra checar el precio de translado entre un lugar y 
			otro usando nuestro sevicio de taxys. Tan solo tendra que ingresar
			 el nombre de la calle y colonia del lugar de donde se encuentra y
			  hacia donde quiere ir, hecho esto tan solo con dar en cotizar le
			   saldra la distancia que se recorrera y el precio que se le 
			   cobraria por tal servicio (la cotizacion no tiene precio alguno).
		</p>

	</article>
	<article id="a2">
		<br>
		<br>
		<br>
		<div id="formBus">
			<center><table>
				<form action="php/3.php" method="post">
				<tr>
					<td><input type="text" name="origenee" id="origen" placeholder="Origen:" class="formr"></td>
					<td><input type="text" name="destinoo" id="destino" placeholder="Destino:" class="formr"></td>
					<td><input type="button" onclick="recargar()" value="Consultar" class="buttons"></td>
					<td><input type="submit" value="Pedir Taxy" class="buttons"></td>	
				</tr>
				</form>
			</table></center>
		</div>
		<div id="map-canvas"></div>
		<div id="directionsPanel"></div>
	</article>
</section>
<?php include 'incluir/footer.zox'; ?>
