<!DOCTYPE html>
<html class="fondo"style="height: 1000px;width: 1000px">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Actualizar un registro de la BD</title>
	
	<link rel="stylesheet" href="ejemplo.css">
</head>

<body>
	<div class="contenedortodo">
		<div class="encabezado">    
		<h1>Venta de componentes para computadora.</h1>
		</div>

		<div class="contenedor2">
			<div class="columnaizq2">
				<h3>Selecciona los datos que quieres modificar</h3>  
				<br/><br/>
				<form action="Actualizab.php" method="post">
					<table width="350" border="1" align="center">
						<tr> 
							<td class="left"> 
								<label for="idlista">Id *</label> 
							</td> 
							<td class="right"> 
								<input type="text" name="idlista" id="idlista" required> 
							</td> 
						</tr>
						
						<tr> 
							<td class="left"> 
								<label for="nombrenuevo">Nombre del cliente *</label> 
							</td> 
							<td class="right"> 
								<input type="text" name="nombrenuevo" maxlength="50" size="30" id="nombre" required> 
							</td> 
						</tr>
						
						<tr> 
							<td class="left"> 
								<label for="productonuevo">Producto *</label> 
							</td> 
							<td class="right"> 
							<select name="productonuevo" size="1" id="producto" required>
								<option>Seleccione un producto</option>
								<option value="Ram">Ram</option>
                                <option value="Tarjeta Madre">Tarjeta Madre</option>
                                <option value="CPU">CPU</option>
                                <option value="Teclado">Teclado</option>
                                <option value="Raton">Raton</option>
                                <option value="Disco Duro">Disco Duro</option>
							</select> 
						</td>
						</tr>

						<tr> 
						<td class="left"> 
							<label for="nuevacantidad">Cantidad *</label> 
						</td> 
						<td class="right"> 
							<input  type="text" name="nuevacantidad" maxlength="10" size="5" id="cantidad" value="0" required> 
						</td> 
					</tr>

					<tr>
						<td class="left"> 
							<label for="nuevotipodepago">Tipo de Pago *</label> 
						</td>
     
						<td class="right">
							<input type="radio" name="nuevotipodepago" value="efectivo" checked>Efectivo
							<br>
							<input type="radio" name="nuevotipodepago" value="tcredito">Tarjeta de Credito
							<br>
							<input type="radio" name="nuevotipodepago" value="cheque">Transferencia Electr&oacute;nica
							<br>
						</td>
					</tr>

						<tr>
							<td colspan="2" align="center" valign="middle">
								<label>
									<input name="actualizar" type="submit" id="actualizar" value="Actualizar registro" onclick="mensaje()" />									
								</label>
							</td>
						</tr>    
					</table>
					
					<script type='text/javascript'>function mensaje() {alert('Registro actualizado exitosamente.');}
					</script>					
					
				</form>

				
			</div>

			<div class="columnader">
				<h1>Contenido actual de la Base de Datos.</h1>
				</br>
	
				<?php
					include ("Conecta.php");

					$cadena="SELECT * FROM componentes";
					$run=mysqli_query($conser,$cadena);

					echo"<TABLE id='tlista'>";

					echo"<tr>";
					echo"<th> Id </th>";
					echo"<th> Nombre </th>";
					echo"<th> Producto </th>";
					echo"<th> Cantidad </th>";
					echo"<th> Tipo de pago </th>";
					echo"</tr>";

					echo"<tr scope='col'>";
					echo"<p>";
	
					while ($fila = mysqli_fetch_row($run))
					{
						echo"<TR align=center>";
						echo"<TD>".$fila['0']."</TD>";
						echo"<TD>".$fila['1']."</TD>";
						echo"<TD>".$fila['2']."</TD>";
						echo"<TD>".$fila['3']."</TD>";
						echo"<TD>".$fila['4']."</TD>";
						echo"</TR>";
					}
		
					echo "</p>";
					echo "</tr>";
					mysqli_close($conser);

					echo"</TABLE>";

				?>
	
				&nbsp;

				<br/>
				
				<br/>
				<h1><a href="pagusuariob.html">Volver</a></h1>
			</div> <!--cierra el div "columnader"-->
		</div> <!--cierra el div "contenedor2"-->
	</div> <!--cierra el div "contenedortodo"-->
</body>
</html>
