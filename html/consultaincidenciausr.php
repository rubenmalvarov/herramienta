<!doctype html>
<html lang="es">
  <head>
    <title>NukeTrack Consulta INC usuario</title>
	 <meta charset="UTF-8">
    <!-- Aqui acceso al framework de W3School y a nuestro propio CSS -->
	<link rel="stylesheet" href="css/w3.css">
	<link rel="stylesheet" href="css/estilo.css">
 </head>
    <body>
   
    <!-- Imagen y logo -->
    <div class="w3-container w3-center">  
	   <img src="imagenes/logo.png" class="w3-circle" alt="NukeTrack Logo">
    </div>
    
    <!-- Contenedor principal donde debemos introducir la incidencia -->     
    <div class="w3-container w3-card-4 w3-light-grey w3-margin">
    	<div class="w3-container w3-deep-orange w3-center">
		              <h2>Introduzca el número de incidencia</h2>
                </div>
        
        <form action="consultausr.php" method="post">
                <div class="w3-row w3-section ">
                    <textarea name = "id" rows = 1 cols = 10> 0 </textarea> 
                
                    <p><input type = submit value = "Consultar incidencia"class="w3-btn w3-deep-orange w3-round-xlarge" style="width:25%"/> 
                </div>
            
        </form>
        
        </div>
                
                 <!-- Pie de página y enlace a Login. -->
    
        <br>
        <a href="index.html" class="w3-button w3-deep-orange w3-round-xlarge" style="width:25%">Cerrar sesión</a>

        <br>
        <br>
	   <footer>
	   <div class="w3-container w3-black" style="width:100%">
		<h4>Álvaro Vicente y Rubén Martín TFG</h4>
	   </div>
	   </footer>

       
    </body>   
</html>
