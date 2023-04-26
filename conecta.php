<?php

$servidor="localhost";
$usuario="root";
$pass="";
$based="cdc";

$conser=mysqli_connect($servidor, $usuario, $pass, $based);

if (!$conser){//diferente de true o el resultado sea falso
	echo "Error: No se pudo conectar a MySQL".PHP_EOL;
	echo "Error de depuracion no.: " . mysqli_connect_errno().PHP_EOL;
	echo "Descripcion del error: ".mysqli_connect_error().PHP_EOL;
	exit;
}

?>
