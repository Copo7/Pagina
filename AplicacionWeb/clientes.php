<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit();
}

include "datos/clientes.php";


error_reporting(E_ALL);
    ini_set('dispay_errors',1);
$titulo='Clientes';
$html='html/clientes.php';
include "html/plantilla.php";
?>
