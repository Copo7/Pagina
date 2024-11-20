<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero primo</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Inserta Numero</label>
        <input type="number" name="numero" required>
        <input type="submit" value="Comprobar">
    </form>

    <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    function es_primo($numero)
    {
        if ($numero <= 1) {
            return false;
        }

        $i = 2;
        $primo = true;
        while ($primo && $i < $numero) {
            if ($numero % $i == 0) {
                $primo = false;
            } else {
                $i++;
            }
        }
        return $primo;
    }

        $numero = intval($_POST["numero"]);

        if (es_primo($numero)) {
            echo "<p>El número $numero es primo.</p>";
        } else {
            echo "<p>El número $numero no es primo.</p>";
        }
}
    ?>
</body>
</html>
