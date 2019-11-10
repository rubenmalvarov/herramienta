

/* Destruye las sesiones activas*/
<?php
/* Destruye las sesiones activas*/
session_start();
session_unset($_SESSION['nombre']);
session_destroy();
header('location: index.html');
?>


