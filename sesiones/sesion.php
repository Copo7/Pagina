<?php
session_start(); // Inicia la sesión

// Leer parámetros
$nombre = $_POST['nombre'];
$valor = $_POST['valor'];

$_SESSION[$nombre] = $valor; // Añade la variable a la sesión


// Redirige a index.php
header("Location: index.php");
exit;
?>
