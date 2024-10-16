<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $usuario_correcto = "admin";
    $password_correcto = "1234";

    if ($usuario === $usuario_correcto && $password === $password_correcto) {
        echo "OLEEEEEEEEEE bienvenido " . htmlspecialchars($usuario) . "!";
    } else {
        echo "Te has equivocado de usuario o contraseña, intentalo de nuevo :D";
    }
} else {
    echo "No tienes acceso a este sitio";
}
?>
