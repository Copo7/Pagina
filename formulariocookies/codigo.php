<?php
//Leer parametros
$nombre=$_POST['nombre'];
$valor=$_POST['valor'];
//Guardamos en una cookie
setcookie($nombre, $valor, time()+60*30);
//Redirigir a index.php
header("Location: index.php");
exit;
?>