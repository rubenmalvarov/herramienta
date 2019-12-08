<!doctype html>
<html lang="es">
<head>
    <title>NukeTrack Nueva Incidencia</title>
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
            		$categoria = $_POST['categoria'];
            		$resumen = $_POST['resumen'];
                    	$descripcion = $_POST['descripcion'];
            		$fh = fopen("temp.txt", 'r');
			$email2 = fgets($fh);
			fclose($fh);
			$consulta1 = "SELECT idusuario FROM usuarios where email = '$email2'";
			//echo $categoria;
			//echo $resumen;
			//echo $descripcion;
			//echo $email2;
            
			$resultado1 = mysqli_query( $conexion, $consulta1 ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
			$idusu=mysqli_fetch_row($resultado1);
			$idusu1 = $idusu[0];
			//echo $idusu1;
            		// Realizamos la inserción en la BBDD
            		$insertar= "INSERT INTO incidencias (idusuario, categoria, resumen, descripcion, fcreacion, estado) VALUES ('$idusu1', '$categoria', '$resumen', '$descripcion', NOW(), 'En curso')";
			$resultado2 = mysqli_query( $conexion, $insertar ) or die ( "Algo ha ido mal en la creacion de la incidencia");
			echo "<div class='w3-container w3-center'>";
			
			$consulta3 = "SELECT idusuario, resumen, idincidencia FROM incidencias WHERE idusuario='$idusu1' AND resumen='$resumen'";
			$resultado3 = mysqli_query( $conexion, $consulta3 );
			$comprobar=mysqli_fetch_row($resultado3);
			$idusu2 = $comprobar[0];
			$resum2 = $comprobar[1];
			$idinc = $comprobar[2];
			if (($idusu2 == $idusu1)&&($resum2 == $resumen))
			{
			echo "<p>La incidencia se ha creado correctamente</p>";
			echo "<p>Su numero de incidencia es: $idinc</p>";
			}
			
			echo "<a href='formulario1usr.php' class='w3-button w3-round-xlarge w3-deep-orange w3-center style='width:50%'>Volver al menú anterior</a>";
			echo "</div>";
              		//$privilegio= $contra1[1];
			//echo $contrasena;
			//echo $contra;
			//echo $privilegio;
			//Si la inserción a funcionado muestra mensaje
			?>
			
		</div>
</body>
</html>
