<!DOCTYPE html>
<html lang="es">
<head>
    <title>Año bisiesto Cristian Fernández Cornejo</title>
</head>
<body>
    <form method="post">
        <label>Añade un año:</label>
        <input type="number" name="fecha" required>
        <input type="submit" value="Comprobación">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fecha = $_POST["fecha"];
        while ($fecha != 0) {
            if (($fecha % 4 == 0 && $fecha % 100 != 0) || ($fecha % 400 == 0)) {
                echo "$fecha sí es un año bisiesto :D<br>";
            } else {
                echo "$fecha no es un año bisiesto :C<br>";
            }
            echo '<form method="post">
                    <label>Introduce otro año (0 para salir):</label>
                    <input type="number" name="fecha" required>
                    <input type="submit" value="Comprobar">
                  </form>';
            break;
        }
    }
    ?>
</body>
</html>
