<!doctype html>
<html lang="es">
  <head>
    <title>NukeTrack Nueva Incidencia</title>
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
    
    <!-- Contenedor principal con catégorias y datos de la incidencia a registrar por el usuario -->     
    <div class="w3-container w3-card-4 w3-light-grey w3-margin">
	    
    		<form action="nuevainc.php" method="post">
                <div class="w3-container w3-deep-orange w3-center">
		              <h2>Selecciona una categoría </h2>
                </div>
                
                <div class="w3-row w3-section">
        		<select class="w3-select w3-border" name="categoria">
                        <option value="" disabled selected>Selecciona una categoría</option>
            			<option value="1">Equipamiento y dispositivos</option>
            			<option value="2">Aplicaciones y herramientas</option>   
            			<option value="3">Comunicaciones y conectividad</option>
        		</select>
                </div>
                
                <div class="w3-container w3-deep-orange">
                        <h2>Resumen</h2>
                </div>
                
                <div class="w3-row w3-section">
                    <textarea name = "resumen" rows = 1 cols = 30> ¿Cual es el problema?</textarea> 
                </div>
                
                <div class="w3-container w3-deep-orange">
                        <h2>Descripción</h2>
                </div>
                
             
                <div class="w3-row w3-section">
                    <textarea name = "descripcion" rows = 5 cols = 30> Describe el problema </textarea>
                </div>
                <div class="w3-row w3-section">
                    <p><input type = submit value = "Crear"class="w3-btn w3-deep-orange w3-round-xlarge" /> 
                        <input type = reset value = "Cancelar" class="w3-btn w3-deep-orange w3-round-xlarge"/></p> 
                </div>
                
		    <!-- <a href="formuario1adm.php" class="w3-button w3-deep-orange w3-round-xlarge" style="width:50%">Volver a consola de administrador</a> -->
             <br>
                  <br>
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
