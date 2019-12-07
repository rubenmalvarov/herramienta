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

<?php
			// Creamos las variables con los datos necesarios para el acceso a la BBDD.
			
			$bdservidor = "192.168.100.10";	  	// Nombre del servidor
			$bdusuario	= "root";		// Usuario de la BBDD
			$bdcontrasena	= "clase1234";		// Contraseña
			$bdnombre	= "tfg";    	  	// Nombre de la BBDD
			
			// Creamos la conexión con el servidor de la BBDD
			$conexion = mysqli_connect($bdservidor, $bdusuario, $bdcontrasena ) or die ("No se pudo conectar a la BBDD");
			
			// Ahora hay que conectarse a la BBDD.
			$bd = mysqli_select_db( $conexion, $bdnombre ) or die ("Esa BBDD no existe compañero");	
			
			//Probamos con una consulta sencillita
			$consulta = "SELECT idusuario, nombre, ape1 FROM usuarios";
			$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
			
			// Y la mostramos en PHP
            echo "<form action='borrausuario.php' method='post'>";
            echo "<div class='w3-row w3-section'>";
            echo "<select class='w3-select w3-border' name='categoria'>";
            echo "<option value="" disabled selected>Seleccione el usuario a eliminar</option>";
			while ($fila = mysqli_fetch_array( $resultado ))
			{
                $id=$fila[idusuario];
                $nom=$fila[nombre];
                $ape=$fila[ape1];
                echo "<option value=$id>$nom $ape</option>";
			}
	        echo "</select>";
            echo "<input type = submit value = 'Eliminar' class='w3-btn w3-deep-orange w3-round-xlarge'>"; 
            echo "</div>";
            echo "</form>";
?>


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
        
        
    </html
