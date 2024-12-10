<?php
session_start(); // Inicia la sesión
$session = $_GET['session'] ?? null;

if ($session && isset($_SESSION[$session])) {
    unset($_SESSION[$session]); // Elimina la variable de sesión específica
}
//else {
//session_destroy();
//}
header("Location: index.php");
exit;
?>