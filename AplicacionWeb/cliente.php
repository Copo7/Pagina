<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit();
}

error_reporting(E_ALL);
    ini_set('dispay_errors',1);
$titulo='Cliente';
$html='html/cliente.php';
include "html/plantilla.php"
?>