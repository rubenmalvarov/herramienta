<!doctype html>
<html lang="es">
	  <head>
    <title>NukeTrack Acceso</title>
	 <meta charset="UTF-8">


    <!-- Aqui acceso al framework de W3School y a nuestro propio CSS -->
	<link rel="stylesheet" href="css/w3.css">
	<link rel="stylesheet" href="css/estilo.css">
  </head>
	<body>
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
			while ($fila = mysqli_fetch_array( $resultado ))
			{
                $id=$fila[idusuario];
                $nom=$fila[nombre];
                $ape=$fila[ape1];
                echo "<option value=$id>.$nom.' '.$ape.</option>";
			}
	       	echo "</select>";
            	echo "</div>";
           	echo "</form>";
			?>
	</body>
</html>
