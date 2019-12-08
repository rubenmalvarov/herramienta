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
			$consulta = "SELECT idbc, nombre FROM basecon";
			$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
			
			// Y la mostramos en PHP
           
	 echo "<form action='borrabase.php' method='post'>";
            echo "<div class='w3-row w3-section'>";
            echo "<div class='w3-container w3-deep-orange'>";
	    echo "<label class='w3-deep-orange'>Selecciona la entrada a eliminar</label>";
		echo "</div>";
		echo "<select class='w3-select w3-border' name='elim'>";
		echo "<option value='' disabled selected>Selecciona entrada</option>";
			while ($fila = mysqli_fetch_array( $resultado ))
			{
                $id=$fila[idbc];
                $nom=$fila[nombre];
                echo "<option value=$id>$nom</option>";
			}
	       	echo "</select>";
            	echo "</div>";
		echo "<div class='w3-row w3-deep-section'>";
		echo "<p>";
		echo "<input type='submit' value='Eliminar' class='w3-btn w3-deep-orange w3-round-xlarge'>";
		echo "</p>";
		echo "</div>";
           	echo "</form>";
			?>
	</body>
</html>
