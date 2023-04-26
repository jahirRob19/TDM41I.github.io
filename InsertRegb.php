<?php
include("conecta.php");

$nombre=$_POST['nombre'];
$producto=$_POST['producto'];
$cantidad=$_POST['cantidad'];
$tipodepago=$_POST['tipodepago'];

if(preg_match('[Seleccione un producto]',$producto)) {//valida si no se ha escogido un valor
	die('Debes seleccionar un producto de la lista!!!'); //levantar error
}

if(preg_match('[>0]',$cantidad)) {
	die('La cantidad de productos debe ser mayor a cero!!!');
}


$consulta="INSERT INTO componentes (nombre, producto, cantidad, tipodepago)
 VALUES ('$nombre', '$producto', $cantidad, '$tipodepago')";

$run=mysqli_query($conser,$consulta);
mysqli_close($conser);

?>


<!DOCTYPE html>
<html class="fondo"style="height: 1000px;width: 1000px">
<head>
   <title>Registro exitoso</title>
   
   <link rel="stylesheet" href="ejemplo.css">
</head>

<body>
<div class="contenedortodo">
		<div class="encabezado">    
		<h1>Venta de componentes para computadora.</h1>
		</div>
			<div class="columnaizq">
				<h1>Registro agregado exitosamente.</h1>
				</br>
				<img src="palomita.png" height="100" width="150" alt="Hecho" align="center">
				</br>
				<h1><a href="pagusuariob.html">Volver</a></h1>
			</div>
	</div> <!--cierra el div "contenedortodo"-->
</body>
</html>