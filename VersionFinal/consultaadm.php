<!doctype html>
<html lang="es">
<head>
    <title>NukeTrack Acceso</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Imagen y logo -->
    <div class="w3-container w3-center">  
	   <img src="imagenes/logo.png" class="w3-circle" alt="NukeTrack Logo">
    </div>
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
            		$id = $_POST['id'];
           
			$consulta = "SELECT categoria, resumen, descripcion, estado FROM incidencias where idincidencia = '$id'";
			$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        
			
       
			$resultadolinea=mysqli_fetch_row($resultado);
			$categoria= $resultadolinea[0];
			$resumen= $resultadolinea[1];
			$descripcion= $resultadolinea[2];
            		$estado= $resultadolinea[3];
			
			//Se muestran en la página web
			
            		echo "<div class='w3-container w3-card-4 w3-light-grey w3-margin w3-center'>";
			    echo "<div class='w3-container w3-deep-orange w3-center'>";
		        echo "<h2>Resumen incidencia</h2>";
			echo "</div>";
			
			echo "<br>";
            
				echo "<div class='w3-container w3-center'>".$resumen."</div>";
            		echo "<br>";
				echo "<div class='w3-container w3-deep-orange w3-center'>";
		        echo "<h2>Descripción de la incidencia</h2>";
				echo "</div>"; 
            		
			echo "<br>";
				echo "<div class='w3-container w3-center'>" .$descripcion. "</div>";
			echo "<br>";  
                echo "<div class='w3-container w3-deep-orange w3-center'>";
		        echo "<h2>Estado de la incidencia</h2>";
			echo "</div>";
			
			echo "<br>"; 
            
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



</body>
</html>
