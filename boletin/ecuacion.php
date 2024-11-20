<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ecuación de 2º Cristian Fernandez Cornejo</title>
</head>
<body>
    <form method="post">
        <label>Coeficiente a:</label>
        <input type="number" name="a" required><br>
        <label>Coeficiente b:</label>
        <input type="number" name="b" required><br>
        <label>Coeficiente c:</label>
        <input type="number" name="c" required><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];
        $discriminante = $b**2 - 4*$a*$c;
        if ($discriminante > 0) {
            $sol1 = (-$b + sqrt($discriminante)) / (2*$a);
            $sol2 = (-$b - sqrt($discriminante)) / (2*$a);
            echo "Dos posibles soluciones = $sol1 y $sol2";
        } elseif ($discriminante == 0) {
            $sol = -$b / (2*$a);
            echo "Esta ecuación tiene una solución doble: $sol";
        } else {
            echo "Esta ecuación no tiene una solución real.";
        }
    }
    ?>
</body>
</html>