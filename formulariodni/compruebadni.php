<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dnientero = trim($_POST['dni']);
    if (preg_match("/^[0-9]{8}[A-Z]$/i", $dnientero)) {
        $dni = substr($dnientero, 0, 8);
        $letraAnadida = strtoupper(substr($dnientero, -1)); 
        $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
        $indice = (int)$dni % 23;
        $letraCorrecta = $letras[$indice];
        if ($letraAnadida == $letraCorrecta) {
            echo "<h1>El DNI coincide :D: $dnientero</h1>";
        } else {
            echo "<h1>La letra del dni no coincide, esta es su letra $dni$letraCorrecta.</h1>";
        }
    } else {
        echo "<h1>El dni no es valido, prueba de nuevo porfa :C</h1>";
    }
}
?>