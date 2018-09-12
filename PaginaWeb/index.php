<?php
session_start();

require_once("php/gestionBD.php");
$conexion=CrearConexionBD();
if(isset($_SESSION["username"])) {
  $username=$_SESSION["username"];
} else {
  $username=null;
}

?>
<!DOCTYPE html>
<html lang="en">

<!-- CABECERA -->

<head>
        <!-- META DATA -->
        <meta charset="utf-8">        
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
        <meta name="description" content="">
        <meta name="author" content="Rayas">
        <!-- TITLE -->
        <title>Cangrejos</title>
        
</head>

<!-- CUERPO -->

<body id="top">
      <div class="wrapper"> 
        <!-- ####################################CABECERA-CUERPO-PAGINA########################################## -->
            
        

        <!-- ####################################BARRA-SUPERIOR-CUERPO-PAGINA########################################## -->
          
        <!-- ####################################################################################################### -->
                                          <!-- CONTENEDOR -->
        <!-- ####################################################################################################### -->
       </div>
            
<!-- PIE DE PAGINA -->

      </body>
            
</html>