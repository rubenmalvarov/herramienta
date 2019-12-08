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
			$bdusuario	= "root";		        // Usuario de la BBDD
			$bdcontrasena	= "clase1234";		// Contraseña
			$bdnombre	= "tfg";    	  	    // Nombre de la BBDD
			
			// Creamos la conexión con el servidor de la BBDD
			$conexion = mysqli_connect($bdservidor, $bdusuario, $bdcontrasena ) or die ("No se pudo conectar a la BBDD");
			
			// Ahora hay que conectarse a la BBDD.
			$bd = mysqli_select_db( $conexion, $bdnombre ) or die ("Esa BBDD no existe compañero");	
			
			// --------------------------------------------
			
			//Recabamos datos recibidos del formulario vía POST
            $id = $_POST['idbase'];
           // echo $id;
	
			$consulta = "SELECT nombre, solucion FROM basecon WHERE  idbc = '$id'";
			$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
            //echo $resultado;
			
           // MUESTRA CONTRASENA
			$resultadolinea=mysqli_fetch_row($resultado);
			$nombre= $resultadolinea[0];
			$solucion= $resultadolinea[1];
			//echo $nombre;
			//echo $solucion;
			//echo $descripcion;
            		
			echo "<div class='w3-container w3-deep-orange w3-center'>";
		        echo "<h2>Problema</h2>";
				echo "</div>";
            
				echo "<div class='w3-container w3-center'>".$nombre."</div>";
            
				echo "<div class='w3-container w3-deep-orange w3-center'>";
		        echo "<h2>Solución del problema</h2>";
				echo "</div>"; 
            
				echo "<div class='w3-container w3-center'>" .$solucion. "</div>";

		// echo "<form action='resolver.php' method='post'>";
		// echo "<input name='id' type='hidden' value='$id'>";
		// echo "<input type = submit value = 'Resolver la incidencia' class='w3-button w3-deep-orange w3-round-xlarge' style='width:25%'>";
		//echo "</form>";


		?>
		</div>

</body>
</html>
