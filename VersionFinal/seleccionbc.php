<!doctype html>
<html lang="es">
	  <head>
    <title>NukeTrack Acceso</title>
	 <meta charset="UTF-8">


    <!-- Aqui acceso al framework de W3School y a nuestro propio CSS -->
	<link rel="stylesheet" href="css/w3.css">
	<link rel="stylesheet" href="css/estilo.css">
 <!-- Imagen y logo -->
    <div class="w3-container w3-center">  
	   <img src="imagenes/logo.png" class="w3-circle" alt="NukeTrack Logo">
    </div>
    
    <br>
 
  </head>
	<body>
   
    <div class="w3-container w3-card-4 w3-light-grey w3-margin w3-center">
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
			
			$cate = $_POST['categoria'];

			//Consulta con la variable seleccionada en formulario anterior
			$consulta = "SELECT idbc, nombre FROM basecon WHERE categoria='$cate'";
			$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
			
			// Y la mostramos en PHP
           
	 	echo "<form action='consultabc.php' method='post'>";
		echo "<div class='w3-container w3-deep-orange w3-center'>";
		echo "<h2>Selecciona una entrada</h2>";

		echo "</div>";
            echo "<div class='w3-row w3-section'>";
            echo "<div class='w3-container w3-deep-orange'>";
	    echo "<label class='w3-deep-orange'>Selecciona una entrada</label>";
		echo "</div>";
		echo "<select class='w3-select w3-border' name='idbase'>";
		echo "<option value='' disabled selected>Selecciona una entrada</option>";
			while ($fila = mysqli_fetch_array( $resultado ))
			{
                $id=$fila[idbc];
                $nom=$fila[nombre];
                echo "<option value=$id>$nom</option>";
			}
	       	echo "</select>";
            	echo "</div>";
		echo "<div class='w3-row w3-deep-section'>";
		echo "<p>";
		echo "<input type='submit' value='Consultar' class='w3-btn w3-deep-orange w3-round-xlarge'>";
		echo "</p>";
		echo "</div>";
           	echo "</form>";
			?>
	</div>
 		<footer>
	   <div class="w3-container w3-black" style="width:100%">
		<h4>Álvaro Vicente y Rubén Martín TFG</h4>
	   </div>
	   </footer>

	</body>
</html>
