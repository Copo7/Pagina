<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit();
}
error_reporting(E_ALL);
    ini_set('dispay_errors',1);

$titulo='Principal';
$html='html/principal.php';
include "html/plantilla.php"
?>
