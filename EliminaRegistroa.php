<!DOCTYPE html>
<html class="fondo"style="height: 1000px;width: 1000px">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Eliminar un registro de la BD</title>
	
	<link rel="stylesheet" href="ejemplo.css">
</head>

<body>
	<div class="contenedortodo">
		<div class="encabezado">    
		<h1>Venta de componentes para computadora.</h1>
		</div>
			<div class="columnaizq">
				<h1>Selecciona el registro a eliminar.</h1>
				</br>

				<form action="Eliminaa.php" method="post">
				<table width="300" border="1" align="center">
					<tr>
						<td width="117">Registro a eliminar </td>
						<td width="67">
							<label>
								<?php
									include("conecta.php");
								?>
								<select name="regelimina" id="regelimina">
									<!-- <option value="Selecciona registro">Selecciona registro</option> -->
		
									<?php
										$cadena="SELECT * FROM componentes";
										$run=mysqli_query($conser,$cadena);
										while($fila = mysqli_fetch_array($run))
										{
											echo"<option value=".$fila['idcomp'].">".$fila['idcomp']."</option>"; 
										}
										mysqli_close($conser);
									?>
								</select>
							</label>
						</td>
					</tr>
					
					<tr>
						<td colspan="2" align="center" valign="middle">
							<label>
								<input name="eliminar" type="submit" id="eliminar" value="Eliminar" />
							</label>
						</td>
					</tr>    
				</table>
				</form>

				<h1><a href="pagusuarioa.html">Volver</a></h1>
	</div> <!--cierra el div "contenedortodo"-->
</body>
</html>
