<!DOCTYPE html>
<html lang="es">
<head>
    <title>Hipotenusa Cristian Fernandez Cornejo</title>
</head>
<body>
    <form method="post">
        <label>Introduce el cateto A:</label>
        <input type="number" name="catetoA" required><br>
        <label>Introduce el cateto B:</label>
        <input type="number" name="catetoB" required><br>
        <input type="submit" value="Calculadora de Hipotenusa">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $catetoA = $_POST["catetoA"];
        $catetoB = $_POST["catetoB"];
        $hipotenusa = sqrt($catetoA**2 + $catetoB**2);
        echo "El resultado de la hipotenusa es => $hipotenusa";
    }
    ?>
</body>
</html>