<!DOCTYPE html>
<html lang="es">
<head>
    <title>Factoriales Cristian Fernandez Cornejo</title>
</head>
<body>
    <form method="post">
        <label>Pon el numero que quieras:</label>
        <input type="number" name="facto" required>
        <input type="submit" value="Calculadora">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $facto = $_POST["facto"];
        $factorial = 1;
        for ($i = 1; $i <= $facto; $i++) {
            $factorial *= $i;
        }
        echo "El resultado de el factorial de $facto es = $factorial";
    }
    ?>
</body>
</html>