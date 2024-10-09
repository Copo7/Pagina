<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $usuario_correcto = "admin";
    $password_correcto = "1234";

    if ($usuario === $usuario_correcto && $password === $password_correcto) {
        echo "Login exitoso. ¡Bienvenido, " . htmlspecialchars($usuario) . "!";
    } else {
        echo "Nombre de usuario o contraseña incorrectos.";
    }
} else {
    echo "Acceso no permitido.";
}
?>
