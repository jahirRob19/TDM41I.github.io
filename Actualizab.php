<?php
	include("conecta.php");
	
	$idL = @$_POST['idlista'];
	$nombreN = @$_POST['nombrenuevo'];
	$productoN = @$_POST['productonuevo'];
	$Ncantidad = @$_POST['nuevacantidad'];
	$Ntipodepago = @$_POST['nuevotipodepago'];
	
	$cadena = "UPDATE componentes SET nombre='$nombreN', producto='$productoN', cantidad='$Ncantidad', tipodepago='$Ntipodepago' where idcomp= ".$idL;
	
	$run=mysqli_query ($conser,$cadena);
	echo $run;
		
	mysqli_close($conser);
	
  //Redireccionamos a la pagina principal	
  echo "<SCRIPT LANGUAGE='JavaScript'>
		location.href='ActualizaRegistrob.php';
	</SCRIPT>";
?>