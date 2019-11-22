<?php
session_start();
?>

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
			// Conexión
			include 'variables.php';	
			
			// Variables de conexión
			$variables = mysqli_connect($bdhost, $bdemail, $bdcontrasena, $bdnombre);
			
			// Revisar la conexión
			if (!$variables) {
				die("Conexión fallida: " . mysqli_connect_error());
			}
			
			// Los datos que se envían desde el index (login) 
			$email = $_POST['email']; 
			$contrasena = $_POST['contrasena'];
			
			alert ($email); 
			
			// Consulta que enviamos a la BBDD
			$resultado = mysqli_query($variables, "SELECT email, contrasena, privilegio, nombre FROM usuarios WHERE email = '$email'");
			
			// Variable $fila contiene el resultado de la consulta
			$fila = mysqli_fetch_assoc($resultado);
			
			// Variable $hash contiene la contraseña has de la BBDD
			$hash = $fila['contrasena'];
			
			/* 
			password_Verify() Esta función verifica si la contraseña introducida es la que tiene el metodo hash. 
			Si todo está bien se crea una sesión de 15 minutos. session.	
			
			Además hacemos dos IF que nos sirven para revisar con que tipo de usuario corresponde
      			*/
			if (password_verify($_POST['contrasena'], $hash)) {	
				/* if ($privilegio = 'adm' ) {*/
				
				$_SESSION['loggedin'] = true;
				$_SESSION['nombre'] = $fila['nombre'];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (15 * 60) ;
				
				echo "<div class='alert alert-success mt-4' role='alert'><strong>Bienvenido</strong> $fila[nombre]
				<p><a href='formulario1adm.php'>Accede a formulario administrador</a></p>;
				<p><a href='formulario1usr.php'>Accede a formulario usuario</a></p>;
				
				
				} else {
				echo "<div class='alert alert-danger mt-4' role='alert'>Email or Password are incorrects!
				<p><a href='login.html'><strong>Please try again!</strong></a></p></div>";		
				}
				
				/* 
				header("Location: formulario1adm.php"); 
				exit();
				}
				if ($privilegio = 'usr' ) 
				{
				$_SESSION['loggedin'] = true;
				$_SESSION['nombre'] = $fila['nombre'];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (15 * 60) ;
				header("Location: formulario1usr.php");
				exit();
				}
				
				
				}
				
				*/
				
				
				
        
   
    /*    <div class="w3-container w3-deep-orange w3-center"><p>
		<a href='index.html'><strong>Usuario no valido, intentelo de nuevo.</strong></a></p></div>";			
			}	
			?>
		</div>
			</body>
</html>
