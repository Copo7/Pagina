<!DOCTYPE html>
<html lang="es">
<head>
    <title>Convertidor de grados Cristian Fernandez Cornejo</title>
</head>
<body>
    <form method="post">
        <label>Introduce los ºC</label>
        <input type="number" name="centigrados" required>
        <input type="submit" value="Convertidor de ºC">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $centigrados = $_POST["centigrados"];
        $fahrenheit = (9/5) * $centigrados + 32;
        echo "$centigrados °C equivalen a $fahrenheit °F.";
    }
    ?>
</body>
</html>