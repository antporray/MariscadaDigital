<?php
function CrearConexionBD()
{
	$host="oci:dbname=localhost/XE;charset=UTF8";
	$usuario="root";
	$password="";
	$conexion=null;
	
	try{
		$conexion=new PDO($host,$usuario,$password,array(PDO::ATTR_PERSISTENT => true));
	
     /* Indicar que queremos que lance excepciones cuando ocurra un error*/ 
     $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    	
	}catch(PDOException $e){
		$_SESSION['excepcion']=$e->GetMessage();
		header("Location:php/error.php");
	}
	return $conexion;
}

function CerrarConexionBD($conexion){
	$conexion=null;
}

?>