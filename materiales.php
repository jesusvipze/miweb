<?php
  echo '<!DOCTYPE html>';
echo'<html lang="es">';
echo'<head>';
        echo'<title> Bicicletas De Madera</title>';
        echo'<meta charset="utf-8">';
        echo'<meta name="description" content="Este es un documento HTML5">';
        /*<!-- ENLACE DESCARGA Bootstrap:  https://getbootstrap.com/docs/4.0/getting-started/download/ -->
        <!-- NECESARIO para el Bootstrap y que sea responsive -->*/
        echo'<meta name="viewport" content="width=device-width, initial-scale=1.0">';

        echo'<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">';
        echo'<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>'; 
        /*<!– Importante llamar antes a jQuery para que funcione bootstrap.min.js   –>*/ 
    echo'<script src="js/bootstrap.min.js"></script>';
     /*<!– Llamamos al JavaScript de Bootstrap –>*/ 

        echo'<link href="css/estilos.css" rel="stylesheet" type="text/css">';        
echo'</head>';
echo'<body>';
	

	echo'<nav class="navbar navbar-expand-lg navbar-dark info-color">';
    echo'<a class="navbar-brand" href="#">MENÚ</a>';
    echo'<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>';
    echo'<div class="collapse navbar-collapse" id="navbarSupportedContent">';
        echo'<ul class="navbar-nav mr-auto">';
            echo'<li class="nav-item active">';
               echo'<a class="nav-link waves-effect waves-light" href="index.php">INICIO <span class="sr-only">(current)</span></a>';
            echo'</li>';
            echo'<li class="nav-item">';
               echo'<a class="nav-link waves-effect waves-light" href="materiales.php">MATERIA PRIMA</a>';
            echo'</li>';
            echo'<li class="nav-item">';
               echo'<a class="nav-link waves-effect waves-light" href="contacto.php">CONTACTO</a>';
            echo'</li>';
            echo'<li class="nav-item dropdown">';
                echo'<a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink"               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MAS COSAS</a>';
                echo'<div class="dropdown-menu dropdown-info" aria-labelledby="navbarDropdownMenuLink">';
                echo'<a class="dropdown-item waves-effect waves-light" href="#">RUEDAS</a>';
                echo'<a class="dropdown-item waves-effect waves-light" href="#">SILLINES</a>';
                echo'<a class="dropdown-item waves-effect waves-light" href="#">CESTAS</a>';
                echo'</div>';
            echo'</li>';
        echo'</ul>';
        echo'<form class="form-inline">';
        echo'<div class="md-form my-0">';
            echo'<input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Buscar">';
            echo'</div>';
        echo'</form>';
    echo'</div>';
echo'</nav>';
                  
            echo'<div class="row"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 columnaheader">';
            echo'<img src="img/banner.jpg" alt="Bicicleta de madera" />';	
            echo'</div></div>';
                                echo'<div class="row">';
                                       echo'<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2" id="izquierda">';
                                       echo'<div id="recipiente"><p id="titulo">TESTIMONIOS:</p><br />';
                                       echo'<p class="testimonio">"MADERA DE PINO TRADICIONAL. SENCILLEZ Y ELEGANCIA"</p>';
                                       echo'<img src="img/bicimaderita.jpg" alt="bici de madera" />';
                                        
                                       echo'<p class="testimonio">"MADERA DE CASTAÑO. TOQUE RÚSTICO.</p>';
                                       echo'<img src="img/bicidemadera2.jpg" alt="bici de madera" />';
                                       echo'<p class="testimonio">MADERA DE BAMBÚ DEL PIRINEO. UNA LOCURA</p>';
                                       echo'</div>';	
                                       echo'</div>';
                                       echo'<div class="col-xs-4 col-sm-10 col-md-10 col-lg-10" id="derecha">';
                                                
                                                
                                                echo'<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cuerpo">';
                                                echo'<p>Fabricamos nuestras bicicletas con los mejores materiales de la naturaleza. Para ello seleccionamos cuidadosamente cada pieza antes del montaje.</p><br />';
                                                echo'<p>Puedes escoger la madera que más te guste.</p><br />';
                                                echo'<p>Porque queremos que te encante tu nueva bicicleta</p>';
                                                	 echo'<div id="axis" class="one">';
                                                     echo'<img width="200" class="object van move-right" src="img/bicicleta.gif" alt="bicicleta"/>';
                                                     echo'</div>';
                                                	
                                                echo'</div>';
												
												
												
										echo'</div>';		
                                echo'</div>';
        
			echo'<div class="row"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 columnafooter">';
			echo'<p>BicicletasDemadera.Com™ ©copyright 2020</p>';
			echo'</div></div>';					
        echo'</div>';   
        
		echo'</body>';
		echo'</html>';
	
        		
		
echo'</body>';
echo'</html>';
?>