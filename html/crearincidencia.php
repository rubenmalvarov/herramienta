
<!DOCTYPE html>
<html lang="es">
<head>       
<meta charset="UTF-8" />       
<title></title>  
</head>  
<body>
<form action="autenticacion.php" method="post"> 
 <select name="categoria" size="3">
 <option value="hardware" selected>Equipamiento y dispositivos</option>
 <option value="software">Aplicaciones y herramientas</option>   
 <option value="red">Comunicaciones y conectividad</option>
 </select>

<p>Descripci&oacute;n. (¿Cual es el problema?) </p> 
<br /> <textarea name = descripcion rows = 5 cols = 1></textarea> 

<p>Resumen (Detalla el problema)</p> 
<br /> <textarea name = descripcion rows = 5 cols = 10></textarea> 
 
<p> <input type = submit value = "Crear" /> <input type = reset value = "Cancelar" /> </p> </form> 
</form>  

 
 
