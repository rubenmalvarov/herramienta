<?php
session_start();
header('Content-Type:text/html;charset=utf-8')
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
			$variables = mysqli_connect($bdhost, $bdusuario, $bdcontrasena, $bdnombre);
			// Revisar la conexión
			if (!$variables) {
				die("Conexión fallida: " . mysqli_connect_error());
			}
			
			// Los datos que se envían a el index (login) 
			$usuario = $_POST['usuario']; 
			$contrasena = $_POST['contrasena'];
      			$privilegio = $_POST['privilegio'];
			
			// Consulta que enviamos a la BBDD
			$resultado = mysqli_query($variables, "SELECT usuario, contrasena, privilegio FROM usuarios WHERE usuario = '$usuario'");
			
			// Variable $fila contiene el resultado de la consulta
			$fila = mysqli_fetch_assoc($resultado);
			
			// Variable $hash contiene la contraseña has de la BBDD
			$hash = $fila['contrasena'];
			
			/* 
			password_Verify() Esta función verifica si la contraseña introducida es la que tiene el metodo hash. 
			Si todo está bien se crea una sesión de 15 minutos. session.			
      			*/
			if (password_verify($_POST['contrasena'], $hash)) {	
				
				$_SESSION['loggedin'] = true;
				$_SESSION['nombre'] = $fila['nombre'];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (15 * 60) ;
        
        
         /* Ahora según sea admin o usuario normal se redirige a un sitio u otro, pero eso no se como hacerlo.*/
          if ($privilegio = 'adm' ) {	
          <a href='formulario1adm.php'><strong>Please try again!</strong></a></p></div>
          }
          
          if ($privilegio = 'usr' ) {
          <a href='formulario1usr.php'><strong>Please try again!</strong></a></p></div>
          }
       
		
			} else {
        <div class="w3-container w3-deep-orange w3-center"><p><a href='index.html'><strong>Usuario no valido, intentelo de nuevo.</strong></a></p></div>";			
			}	
			?>
		</div>
			</body>
</html>
