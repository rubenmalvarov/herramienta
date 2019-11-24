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
			
			$bdservidor = "localhost";	  	// Nombre del servidor
			$bdusuario	= "root";		// Usuario de la BBDD
			$bdcontrasena	= "clase1234";		// Contraseña
			$bdnombre	= "tfg";    	  	// Nombre de la BBDD
			
			// Creamos la conexión con el servidor de la BBDD
			$conexion = mysqli_connect($bdservidor, $dbusuario, $bdcontrasena ) or die ("No se pudo conectar a la BBDD");
			
			// Ahora hay que conectarse a la BBDD.
			$bd = mysqli_select_db( $conexion, $bdnombre ) or die ("Esa BBDD no existe compañero");	
			
            
            // Probamos a recibir los datos de post.
            
            $email = $_POST['email']; 
			$contrasena = $_POST['contrasena'];
            
            echo $email
            echo $contrasena
                
			//Probamos con una consulta sencillita
			$consulta = "SELECT email, contrasena, privilegio FROM usuarios";
            
            //Se alomacena la contraseña en una variable hash
            $hash = $consulta['contrasena'];
            
            /*password_Verify() Esta función verifica si la contraseña introducida es la que tiene el metodo hash. 
            
			Si todo está bien se crea una sesión de 15 minutos. session.
            */
            
            if (password_verify($_POST['contrasena'], $hash)) {	
                
                $_SESSION['loggedin'] = true;
				$_SESSION['nombre'] = $fila['nombre'];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (15 * 60) ;
                
                echo "<div class='alert alert-success mt-4' role='alert'><strong>Bienvenido</strong> $consulta[email]
				<p><a href='formulario1adm.php'>Accede a formulario administrador</a></p>";
                
        
                } else {
				echo "<div class='alert alert-danger mt-4' role='alert'>Email or Password are incorrects!
				<p><a href='login.html'><strong>Please try again!</strong></a></p></div>";		
				}
            
            
            
		/*	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
			
			// Y la mostramos en PHP
			echo "<table borde='2'>";
			echo "<tr>";
			echo "<th>Nombre</th>";
			echo "<th>Apellido</th>";
			echo "<th>Email</th>";
			echo "</tr>";
			while ($columna = mysqli_fetch_array( $resultado ))
			{
				echo "<tr>";
				echo "<td>" . $columna['nombre'] . "</td><td>" . $columna['ape1'] . "</td><td>" . $columna['email'] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
            
            */
			?>
		</div>
			</body>
</html>
