<!DOCTYPE html>
<html lang="es">
<head>
    <title>Suma Cristian Fernández Cornejo</title>
</head>
<body>
    <form method="post">
        <label>Pon un numero</label>
        <input type="number" name="numero" required>
        <input type="submit" value="Calcular Suma">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        $suma = 0;
        for ($i = 1; $i <= $numero; $i++) {
            $suma += $i;
        }
        echo "Los numeros de 1-$numero es: $suma";
    }
    ?>
</body>
</html>
