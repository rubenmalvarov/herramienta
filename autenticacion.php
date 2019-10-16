<?php
//comprobamos usuario  y contraseña (no se hacer para que distinga entre adm y usr)
if ($_POST["usuario"]=="usuario" && $_POST["contrasena"]=="usuario"){
//usuario y contraseña válidos de adm
//creamos una sesion
$_SESSION["autenticado"]= "SI";
header ("Location: aplicacion.php");
}

if ($_POST["usuario"]=="usuario" && $_POST["contrasena"]=="usuario"){
//usuario y contraseña válidos de usr
//creamos una sesion
$_SESSION["autenticado"]= "SI";
header ("Location: aplicacion.php");
}


else {
//si no existe se va a login.php
header("Location: salir.php");
}
?>