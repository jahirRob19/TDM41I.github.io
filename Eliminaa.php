<?php
	include("conecta.php");
	
	$regelimina = $_POST['regelimina'];
		
	$cadena = "DELETE FROM componentes WHERE idcomp= ".$regelimina;
	
	$run=mysqli_query ($conser,$cadena);
	echo $run;
	if ($run) {
		echo "<script type='text/javascript'>alert('Registro eliminado.')</script>";
	}
	mysqli_close($conser);
	
  //Redireccionamos a la pagina principal	
  echo "<SCRIPT LANGUAGE='JavaScript'>
		location.href='pagusuarioa.html';
	</SCRIPT>";
?>
