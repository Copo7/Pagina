<?php
// Verificamos si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recogemos el valor del DNI del formulario y lo limpiamos
    $dni = trim($_POST['dni']);

    // Validamos que sea un número de 8 dígitos
    if (is_numeric($dni) && strlen($dni) == 8) {
        // Array de letras del DNI según el resto
        $letras = "TRWAGMYFPDXBNJZSQVHLCKE";

        // Calculamos el resto de dividir el número del DNI entre 23
        $indice = (int)$dni % 23;

        // Obtenemos la letra correspondiente
        $letraDNI = $letras[$indice];

        // Mostramos el resultado
        echo "<h1>El DNI completo es: $dni-$letraDNI</h1>";
    } else {
        // Si no es válido, mostramos un mensaje de error
        echo "<h1>Error: Debes introducir un número de 8 dígitos.</h1>";
    }
}
?>
