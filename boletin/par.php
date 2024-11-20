<!DOCTYPE html>
<html lang="es">
<head>
    <title>Número Par o Impar Cristian Fernandez Cornejo</title>
</head>
<body>
    <form method="post">
        <label>Pon un numero =</label>
        <input type="number" name="numero" required>
        <input type="submit" value="Comprobar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        if ($numero % 2 == 0) {
            echo "$Tu numero es par.";
        } else {
            echo "$Tu numero es impar.";
        }
    }
    ?>
</body>
</html>
