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
			//Cogemos el mail de temp.txt
			$fh = fopen("temp.txt", 'r');
			$email2 = fgets($fh);
			fclose($fh);
			$id = $_POST['id'];
			//Metemos idusuario en una variable
			$consultausu = "SELECT idusuario FROM usuarios WHERE email='$email2'";
			$resultadousu = mysqli_query( $conexion, $consultausu ) or die ( "Algo ha ido mal en la consulta a la base de datos");
			$resultadousu2 = mysqli_fetch_row($resultadousu);
			$idusu = $resultadousu2[0];
			//Lo comparamos con el idusuario de la incidencia para comprobar que sea el mismo
			$consultausu3 = "SELECT idusuario FROM incidencias WHERE idincidencia = '$id'";
			$resultadousu3 = mysqli_query( $conexion, $consultausu3 ) or die ( "Algo ha ido mal en la consulta a la base de datos");
			$resultadousu4 = mysqli_fetch_row($resultadousu3);
			$idusu2 = $resultadousu4[0];
			if ($idusu != $idusu2)
			{
			die ("Esta incidencia no es tuya o no existe");
			}
			//Recabamos datos recibidos del formulario vía POST
            //echo $id;
			$consulta = "SELECT categoria, resumen, descripcion, estado FROM incidencias where idincidencia = '$id'";
			$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
            //echo $resultado;
			
            // MUESTRA CONTRASENA
			$resultadolinea=mysqli_fetch_row($resultado);
			$categoria= $resultadolinea[0];
			$resumen= $resultadolinea[1];
			$descripcion= $resultadolinea[2];
            $estado= $resultadolinea[3];
			//echo $categoria;
			//echo $resumen;
			//echo $descripcion;
            		
			    echo "<div class='w3-container w3-deep-orange w3-center'>";
		        echo "<h2>Resumen incidencia</h2>";
				echo "</div>";
            
				echo "<div class='w3-container w3-center'>".$resumen."</div>";
            
				echo "<div class='w3-container w3-deep-orange w3-center'>";
		        echo "<h2>Descripción de la incidencia</h2>";
				echo "</div>"; 
            
				echo "<div class='w3-container w3-center'>" .$descripcion. "</div>";
			  
                echo "<div class='w3-container w3-deep-orange w3-center'>";
		        echo "<h2>Estado de la incidencia</h2>";
				echo "</div>"; 
            
				echo "<div class='w3-container w3-center'>" .$estado. "</div>";
			echo "<br>";
	echo "<form action='resolver.php' method='post'>";
		echo "<input name='id' type='hidden' value='$id'>";
		echo "<input type = submit value = 'Cambiar estado a resuelta' class='w3-button w3-deep-orange w3-round-xlarge' style='width:25%'>";
		echo "<br>";
		echo "<br>";
		echo "</div>";
		echo "<br>";
		echo "<a href='formulario1adm.php' class='w3-button w3-round-xlarge w3-deep-orange w3-center style='width:50%'>Volver al menú anterior</a>";
				
		echo "</form>";
		echo "</div>";
      			?>
			
		</div>
</body>
</html>
