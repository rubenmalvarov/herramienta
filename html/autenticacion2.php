<?php
session_start();
?>

<!doctype html>
<html lang="en">
	<head>
		<title>Check Login and create session</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	</head>
	<body>
		<div class="container">
		
			<?php
			// Creamos las variables con los datos necesarios para el acceso a la BBDD.
			
				$bdservidor = "localhost";	  	// Nombre del servidor
				$bdusuario	= "root";		// Usuario de la BBDD
				$bdcontrasena	= "clase1234";		// Contraseña
				$bdnombre	= "tfg";    	  	// Nombre de la BBDD
			
			// Creamos la conexión con el servidor de la BBDD
			$conexion = mysqli_connect($bdservidor, $dbusuario, $bdcontrasena ) or die ("No se pudo conectar a la BBDD");
			
			// Ahora hay que conectarse a la BBDD.
			$bd = mysqli_select_db( $conexion, $bdnombre ) or die ("Esa BBDD no existe compañero");	
			?>
		</div>

	</body>
</html>
