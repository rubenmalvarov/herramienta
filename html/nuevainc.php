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
            		$categoria = $_POST['categoria'];
            		$resumen = $_POST['resumen'];
                    	$descripcion = $_POST['descripcion'];
            
			/* $consulta = "SELECT contrasena, privilegio FROM usuarios where email = '$email'"; */
			
			
            		// Realizamos la inserción en la BBDD
            		$insertar= "INSERT INTO incidencias ( categoria, resumen, descripcion ) VALUES ('$categoria','$resumen,'$descripcion')";
            
			/* $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos"); */
        
			
            		// MUETRA CONTRASENA
			//$contra1=mysqli_fetch_row($resultado);
			//$contra= $contra1[0];
			//$privilegio= $contra1[1];
			//echo $contrasena;
			//echo $contra;
			//echo $privilegio;
            		
			//Si la inserción a funcionado muestra mensaje
			if (mysqli_query($conexion, $insertar)) 
			{
            			echo "<div class='w3-container w3-deep-orange w3-center'>
		             	<h2>Su incidencia se a guardado correctamente</h2>
                         	</div>"; 
                	
            		else 
                	{ 
               			echo "<div class='w3-container w3-deep-orange w3-center'>
		              	<h2>Error al ejecutar la inserción</h2>
                         	</div>";
			}
			}
			?>
			
		</div>
</body>
</html>
