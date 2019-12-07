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
            		$email = $_POST['email'];
            		$contrasena = $_POST['contrasena'];
	                $nombre = $_POST['nombre'];
            		$apellido1 = $_POST['apellido1'];
        	        $apellido2 = $_POST['apellido2'];
                	$privilegios = $_POST['permisos'];
      			$contrahash = password_hash($contrasena, PASSWORD_BCRYPT);
		//	echo $contrahash;
		//	$consulta1 = "SELECT idusuario FROM usuarios where email = '$email2'";
		//	echo $email;
		//	echo $contrasena;
		//	echo $nombre;
		//	echo $apellido1;
      		//	echo $apellido2;
      		//	echo $privilegios;
            		// Realizamos la inserción en la BBDD

            		$insertar= "INSERT INTO usuarios (contrasena, nombre, ape1, ape2, email, privilegio) VALUES ('$contrahash', '$nombre', '$apellido1', '$apellido2', '$email', '$privilegios')";
			$resultado1 = mysqli_query( $conexion, $insertar ) or die ("Algo ha ido mal en la creacion del usuario");
              		
			echo "<div class='w3-container w3-center'>";
			echo "<a href='formulario1adm.php' class='w3-button w3-round-xlarge w3-deep-orange w3-center style='width:50%'>Volver al menú anterior</a>";
			echo "</div>";
			//$privilegio= $contra1[1];
			//echo $contrasena;
			//echo $contra;
			//echo $privilegio;
			?>
			
		</div>
</body>
</html>
