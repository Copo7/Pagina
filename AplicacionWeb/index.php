<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header('Location: principal.php');
    exit();
}
error_reporting(E_ALL);
    ini_set('dispay_errors',1);

include "html/index.php"
?>