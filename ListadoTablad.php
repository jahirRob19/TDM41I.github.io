<!DOCTYPE html>
<html class="fondo"style="height: 1000px;width: 1000px">
<head>
	<title>Contenido de la Tabla</title>
	
	<link rel="stylesheet" href="ejemplo.css">
</head>

<body>
	<div class="contenedortodo">
		<div class="encabezado">    
		<h1>Venta de componentes para computadora.</h1>
		</div>
			<div class="columnaizq">
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

				</br>
				<h1><a href="pagusuariod.html">Volver</a></h1>
	</div> <!--cierra el div "contenedortodo"-->
</body>
</html>
