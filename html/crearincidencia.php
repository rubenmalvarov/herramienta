
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
    
    <div class="w3-container w3-center">
        <div class="w3-container w3-deep-orange w3-center">
		<h2>Selecciona una categoría </h2>
    </div>
    <form action="autenticacion.php" method="post">
        <select name="categoria" size="3">
            <option value="hardware" selected>Equipamiento y dispositivos</option>
            <option value="software">Aplicaciones y herramientas</option>   
            <option value="red">Comunicaciones y conectividad</option>
        </select>
        
<p>Descripción (¿Cual es el problema?) </p> 
<br /> <textarea name = descripcion rows = 5 cols = 1></textarea> 

<p>Resumen (Detalla el problema)</p> 
<br /> <textarea name = descripcion rows = 5 cols = 10></textarea> 
 
<p> <input type = submit value = "Crear" /> <input type = reset value = "Cancelar" /> </p> </form> 
    
    
    
    
    <br>
    
    <div class="w3-container w3-deep-orange w3-center">
		<h2>Usuario administrador</h2>
    </div>
    
    <br>

    <div class="w3-container w3-center">
    
        <a href="crearincidencia.php" class="w3-button w3-deep-orange w3-center w3-round-xlarge" style="width:50%">Nueva incidencia</a>
   
    <br><br>

        <a href="consultaincidenciaadm.php" class="w3-button w3-deep-orange w3-center w3-round-xlarge" style="width:50%">Consultar incidencia</a>
        
    <br><br>
    
        <a href="basedeconocimientos.php" class="w3-button w3-deep-orange w3-center w3-round-xlarge" style="width:50%">Base de conocimientos</a>
   
    <br><br>
    
        <a href="administracionusuarios.php" class="w3-button w3-deep-orange w3-center w3-round-xlarge" style="width:50%">Administracion de usuarios</a>
        
    </div>

</html>
 
 
