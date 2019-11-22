<!doctype html>
<html lang="es">
  <head>
    <title>NukeTrack Administrador</title>
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
   
    		<form action="autenticacion.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
                <div class="w3-container w3-deep-orange w3-center">
		              <h2>Selecciona una categoría </h2>
                </div>
                
                <div class="w3-row w3-section w3-center">
        		<select class="w3-select w3-border" name="categoria">
                        <option value="" disabled selected>Selecciona una categoría</option>
            			<option value="hardware">Equipamiento y dispositivos</option>
            			<option value="software">Aplicaciones y herramientas</option>   
            			<option value="red">Comunicaciones y conectividad</option>
        		</select>
                </div>
                
                <div class="w3-container w3-deep-orange">
                        <h2>Resumen</h2>
                </div>
                
                <div class="w3-row w3-section">
                    <textarea name = resumen rows = 1 cols = 30> ¿Cual es el problema?</textarea> 
                </div>
                
                <div class="w3-container w3-deep-orange">
                        <h2>Descripción</h2>
                </div>
                
             
                <div class="w3-row w3-section">
                    <textarea name = descripcion rows = 5 cols = 30> Describe el problema </textarea> 
                <div class="w3-row w3-section w3-center">
                    <p><input type = submit value = "Crear" /> <input type = reset value = "Cancelar" /></p> 
                </div>
                
		<a href="formuario1adm.php" class="w3-button w3-deep-orange w3-round-xlarge" style="width:50%">Volver a consola de administrador</a>
            </form> 
       
    </body>    
        
        
    </html>
