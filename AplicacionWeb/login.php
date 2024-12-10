<?php
session_start();

include "datos/usuarios.php";

if($_SERVER['REQUEST_METHOD']=='POST')
{
    if (isset($_REQUEST['usuario']) && isset($_REQUEST['password'])) {
        $usuario = $_REQUEST['usuario'];
        $password = $_REQUEST['password'];

        if (isset($usuarios[$usuario]) && $usuarios[$usuario]['password'] == $password) {
            $_SESSION['usuario'] = $usuarios[$usuario];
            header('Location: principal.php');
            exit;
        } else {
            $_SESSION['error'] = 'Usuario y/o contraseña incorrectos';
            header('Location: index.php');
            exit;
        }
    } else {
        $_SESSION['error'] = 'Falta el usuario y/o la contraseña';
        header('Location: index.php');
        exit;
    }
}
?>