<!doctype html>
<html lang="es">
<head>
    <title>NukeTrack Acceso</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Aqui acceso al framework de W3School y a nuestro propio CSS -->
	<link rel="stylesheet" href="css/w3.css">
	<link rel="stylesheet" href="css/estilo.css">
</head>
  
<body>
		<div class="w3-container w3-center">
        
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
			
			// --------------------------------------------
			
			
			
			//Recabamos datos recibidos del formulario vía POST
            		$categoriabc = $_POST['categoria'];
			$nombrebc = $_POST['nombre'];
            		$solucionbc = $_POST['solucion'];
			//echo $categoriabc;
			//echo $nombrebc;
			//echo $solucionbc;
            		//Realizamos la inserción en la BBDD
            		$insertar= "INSERT INTO basecon (nombre, solucion, categoria) VALUES ('$nombrebc', '$solucionbc', '$categoriabc')";
			$resultado2 = mysqli_query( $conexion, $insertar ) or die ( "Algo ha ido mal en la creacion");
			echo "<div class='w3-container w3-center'>";
			$consulta3 = "SELECT nombre, solucion FROM basecon WHERE nombre='$nombrebc' AND solucion='$solucionbc'";
			$resultado3 = mysqli_query( $conexion, $consulta3 );
			$comprobar=mysqli_fetch_row($resultado3);
			$nom = $comprobar[0];
			$solu = $comprobar[1];
			if (($nom == $nombrebc)&&($solu == $solucionbc))
			{
			echo "<p>La entrada se ha creado correctamente en la base de conocimientos</p>";
			}
			echo "<a href='administracionbc.php' class='w3-button w3-round-xlarge w3-deep-orange w3-center style='width:50%'>Volver al menú anterior</a>";
			echo "</div>";
			?>
			
		</div>
</body>
</html>
