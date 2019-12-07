<!doctype html>
<html lang="es">
  <head>
    <title>NukeTrack Nuevo usuario</title>
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
	    
    		<form action="nuevousuario.php" method="post">
                
                <div class="w3-container w3-deep-orange">
                        <h2>Introduce email</h2>
                </div>
                
                <div class="w3-row w3-section">
                    <textarea name = "email" rows = 1 cols = 30> ¿Cual es el problema?</textarea> 
                </div>
                
                <div class="w3-container w3-deep-orange">
                        <h2>Introduce contraseña</h2>
                </div>
                
             
                <div class="w3-row w3-section">
                    <textarea name = "contrasena" rows = 1 cols = 15> Describe el problema </textarea>
                </div>
		
		<div class="w3-row w3-section">
                    <textarea name = "nombre" rows = 1 cols = 15> Describe el problema </textarea>
                </div>
			
		<div class="w3-row w3-section">
                    <textarea name = "apellido1" rows = 1 cols = 15> Describe el problema </textarea>
                </div>
			
		<div class="w3-row w3-section">
                    <textarea name = "apellido2" rows = 1 cols = 15> Describe el problema </textarea>
                </div>
			
                <div class="w3-row w3-section">
                    <p><input type = submit value = "Crear"class="w3-btn w3-deep-orange w3-round-xlarge" /> 
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
