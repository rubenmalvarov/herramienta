<?php
//comprobamos usuario  y contrase�a (no se hacer para que distinga entre adm y usr)
if ($_POST["usuario"]=="usuario" && $_POST["contrasena"]=="usuario"){
//usuario y contrase�a v�lidos de adm
//creamos una sesion
$_SESSION["autenticado"]= "SI";
header ("Location: aplicacion.php");
}

if ($_POST["usuario"]=="usuario" && $_POST["contrasena"]=="usuario"){
//usuario y contrase�a v�lidos de usr
//creamos una sesion
$_SESSION["autenticado"]= "SI";
header ("Location: aplicacion.php");
}


else {
//si no existe se va a login.php
header("Location: salir.php");
}
?>