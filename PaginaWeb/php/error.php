<?php
     
	session_start();//inicia sesión

	if(isset($_SESSION['excepcion'])) {//si hay una excepción conocida
		$excepcion=$_SESSION['excepcion'];//asigna el valor
		unset($_SESSION['excepcion']);//borra la sesión con la excepción
	}	
	else
		$excepcion="Ha ocurrido algún tipo de error desconocido";//si se produce una excepción desconocida para el programa
		
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Error</title>
		<link type="text/css" rel="stylesheet" href="css/navegacion.css">  
	</head>
	<body>	
	
	<h2>Ups!</h2>
	<p>Ocurrió un problema durante el procesado de los datos.</p>
	
	<?php 
	
	echo $excepcion;
	?>
	
	</body>
</html>
?>