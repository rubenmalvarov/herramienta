<?php
session_start();
?>

<html lang="es">
  <head>
    <title>NukeTrack Acceso</title>
	 <meta charset="UTF-8">


   <!-- Aqui acceso al framework de W3School y a nuestro propio CSS -->
	<link rel="stylesheet" href="css/w3.css">
	<link rel="stylesheet" href="css/estilo.css">
  </head>
  

<body>

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
  
      //Metemos los datos recibidos por POST en variables
      $email = $_POST['email']; 
	    $contrasena = $_POST['contrasena'];
  
      // Hcemos la consulta de los datos de usuario en la BBDD y los metemos en un array
      $consulta = "SELECT nombre, email, contrasena, privilegio FROM usuarios";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    	 $row = mysqli_fetch_assoc($resultado);
	$contra = $row['contrasena'];
  
      if (password_verify($_POST['contrasena'],$contra)) {	
                
        $_SESSION['loggedin'] = true;
				$_SESSION['name'] = $row['nombre'];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (15 * 60) ;
                
                echo "<div class='alert alert-success mt-4' role='alert'><strong>Bienvenido</strong>$row[nombre]
				<p>
				<a href='formulario1adm.php'>Accede a formulario administrador</a></p>";
                
        
      } else {
				echo "<div class='alert alert-danger mt-4' role='alert'>Email or Password are incorrects!
				<p><a href='index.html'><strong>Please try again!</strong></a></p></div>";		
				}
  ?>
  
  
</body>
</html>
