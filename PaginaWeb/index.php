
<?php


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
           <?php
            require_once("html/portada.html");
            ?>

        

        <!-- ####################################BARRA-SUPERIOR-CUERPO-PAGINA########################################## -->
           <div id="topbar">
                  <?php
                  require_once("html/menunavegacion.html");
                  ?>
                  <br class="clear" />
            </div>
        <!-- ####################################################################################################### -->
                                          <!-- CONTENEDOR -->
        <!-- ####################################################################################################### -->
            <div id="container" style="margin:auto;">
                  <div id="content">

                  <!-- ACTUALIZADOR DE CONTENIDO --> 

                    <?php 
                    require_once($_SESSION["pagina"]);
                    ?>
                      
            </div>
       </div>
            
<!-- PIE DE PAGINA -->

      </body>
<div id="footer">                
      <div id="copyright">
          <div>
              <p class="fl_left" style="margin-top: 30px;">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
              <br class="clear" />
          </div>
      </div>
</div> 
</html>