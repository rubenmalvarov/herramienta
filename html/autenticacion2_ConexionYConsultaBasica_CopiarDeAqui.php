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
			echo "</table>";
			?>
