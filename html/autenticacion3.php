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
			
			//Probamos con una consulta sencillita
            
            $email = $_POST['email'];
            $contrasena = $_POST['contrasena']
                
			$consulta = "SELECT nombre, contrasena, email FROM usuarios where email = '$email'";
            
			$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
			

    	   $row = mysqli_fetch_assoc($resultado);
	       $contra = $row['contrasena'];
            
       if ( ($_POST['contrasena']) == $contra ) {	
                
			
           
        echo "<div class='alert alert-danger mt-4' role='alert'>Hola o lo que sea
				<p><a href='index.html'><strong>Please try again!</strong></a></p></div>";
            
            
              
			
        
      } else {
				echo "<div class='alert alert-danger mt-4' role='alert'>Email or Password are incorrects!
				<p><a href='index.html'><strong>Please try again!</strong></a></p></div>";		
				}
  ?>
			
		</div>
</body>
</html>
