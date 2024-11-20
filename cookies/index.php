<?php
$nombre = 'usuario';
$valor = 'Homer';

$expiracion = time() + 60 * 30;

$ruta = '/cookies/';
$dominio = "localhost";

$seguridad = false;

$solohttp = true;
setcookie($nombre, $valor, $expiracion, $ruta, $dominio,
$seguridad, $solohttp);
echo "Cookie establecida";
?>