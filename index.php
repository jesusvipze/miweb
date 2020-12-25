<? php
echo '<!DOCTYPE html>
<html lang="es">
<head>
        <title> Bicicletas De Madera</title>
        <meta charset="utf-8">
        <meta name="description" content="Este es un documento HTML5">
        <!-- ENLACE DESCARGA Bootstrap:  https://getbootstrap.com/docs/4.0/getting-started/download/ -->
        <!-- NECESARIO para el Bootstrap y que sea responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> <!– Importante llamar antes a jQuery para que funcione bootstrap.min.js   –> 
    <script src="js/bootstrap.min.js"></script> <!– Llamamos al JavaScript de Bootstrap –> 

        <link href="css/estilos.css" rel="stylesheet" type="text/css">        
</head>
<body>
	

	<nav class="navbar navbar-expand-lg navbar-dark info-color">
    <a class="navbar-brand" href="#">MENÚ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
               <a class="nav-link waves-effect waves-light" href="index.html">INICIO <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="materiales.html">MATERIA PRIMA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="contacto.html">CONTACTO</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink"               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MAS COSAS</a>
                <div class="dropdown-menu dropdown-info" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item waves-effect waves-light" href="#">RUEDAS</a>
                    <a class="dropdown-item waves-effect waves-light" href="#">SILLINES</a>
                    <a class="dropdown-item waves-effect waves-light" href="#">CESTAS</a>
                </div>
            </li>
        </ul>
        <form class="form-inline">
            <div class="md-form my-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Buscar">
            </div>
        </form>
    </div>
</nav>
                  
            <div class="row"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 columnaheader">
            <img src="img/banner.jpg" alt="Bicicleta de madera" />	
            </div></div>
                                <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2" id="izquierda">
                                        <div id="recipiente"><p id="titulo">TESTIMONIOS:</p><br />
                                        <p class="testimonio">"Me ha llegado esta tarde, es genial, gracias". Jose Lopez (Murcia)</p>
                                        <p class="testimonio">"Brutal. Es demasiado bonita y buena. Gracias". Laura Gonzalez (León)</p>
                                        <p class="testimonio">"Que ligera y robusta es. ¡Me encanta!". Mario Bros</p>
                                        </div>	
                                        </div>
                                        <div class="col-xs-4 col-sm-10 col-md-10 col-lg-10" id="derecha">
                                                
                                                
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cuerpo">
                                                	<p>Descubre la mejor selección de bicicletas de madera del mercado. Bicicletas de carreras, biciletas de montaña, bicicletas de paseo..lo que necesites.</p><br />
                                                	<p>Todo ello fabricado a mano por nuestros artesanos, con la mejores piezas de madera y de metal (donde es necesario). Bañamos la madera en una solución impermeable que le aporta  mayor vida al material.</p><br />
                                                	<p>Te sentirás bien, porque...¡Te sentirás unid@ a la naturaleza! </p>
                                                </div>
												
												
												
										</div>		
                                </div>
        
			<div class="row"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 columnafooter">
				<p>BicicletasDemadera.Com™ ©copyright 2020</p>
			</div></div>					
        </div>   
        
		</body>
		</html>
	
        		
		
</body>
</html>';
?>