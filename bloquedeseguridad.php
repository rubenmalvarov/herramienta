<?php
//Inicio la sesi�n
session_start();
//COMPRUEBA QUE EL USUARIO ESTA AUTENTICADO
if ($_SESSION["autenticado"] != "SI") {
//si no existe, va a la p�gina de autenticacion
header("Location: login.php");
//salimos de este script
exit();
}
?>