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


			//Probamos con una consulta sencillita
            
            		$email = $_POST['email'];
            		$contrasena = $_POST['contrasena'];
                
			$consulta = "SELECT contrasena, privilegio FROM usuarios where email = '$email'";
            
			$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
			

            		// MUETRA CONTRASENA

			//$contra1=mysqli_fetch_row($resultado);
			//$contra= $contra1[0];
			//$privilegio= $contra1[1];
			echo "<p>Contra POST </p>".$contrasena;
			echo "<p>Contra select </p>".$contra;
			echo $privilegio;
			if ( $contrasena == $contra )
            		{
               			 // echo "<p> Bien </p>";
               			 if ( $privilegio == "adm" )
                	{ 
                  	echo "<div class='w3-container w3-center'>";
			echo "<a href='formulario1adm.php' class='w3-button w3-deep-orange w3-center w3-round-xlarge' style='width:50%'>Has iniciado sesión con perfil de administrador, pulsa para continuar</a>";
			echo "</div>"; 
                	} 
                
                	else 
                	{ 
                    	echo "<div class='w3-container w3-center'>";
			echo "<a href='formulario1usr.php' class='w3-button w3-deep-orange w3-center w3-round-xlarge' style='width:50%'>Has iniciado sesión con perfil de administrador, pulsa para continuar</a>";
			echo "</div>";
			}
            		}
            
            		else 
            		{
                	echo "<div class='w3-container w3-center'>";
			echo "<a href='index.html' class='w3-button w3-deep-orange w3-center w3-round-xlarge' style='width:50%'>Usuario no existe, pulsa para volver al login</a>";
			echo "</div>"; 
			} 
			?>
			
		</div>
</body>
</html>
			if ( $contrasena == $contra )
            		{
               			 // echo "<p> Bien </p>";
               			 if ( $privilegio == "adm" )
                	{ 
                  	echo "<div class="w3-container w3-center">
			<a href="formulario1adm.php" class="w3-button w3-deep-orange w3-center w3-round-xlarge" style="width:50%">Has iniciado sesión con perfil de administrador, pulsa para continuar</a></div>"; 
                	} 
                
                	else 
                	{ 
                    	echo "<div class="w3-container w3-center">
			<a href="formulario1usr.php" class="w3-button w3-deep-orange w3-center w3-round-xlarge" style="width:50%">Has iniciado sesión con perfil de administrador, pulsa para continuar</a></div>";
			}
            		}
            
            		else 
            		{
                	echo "<div class="w3-container w3-center">
			<a href="index.html" class="w3-button w3-deep-orange w3-center w3-round-xlarge" style="width:50%">Has iniciado sesión con perfil de administrador, pulsa para continuar</a></div>"; 
			} 
			?>
			
		</div>
</body>
</html>
