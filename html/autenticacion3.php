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
			// Include a Php de conexión
            
			include 'conexion.php';
			
            //Probamos con una consulta sencillita
			$consulta = "SELECT nombre, ape1, email FROM usuarios";
			$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
			
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
		</div>
			</body>
</html>
	
	
	if (password_verify($_POST['password'], $hash)) {	
				
				$_SESSION['loggedin'] = true;
				$_SESSION['name'] = $row['Name'];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;	
  
  
	
</body>
</html>
