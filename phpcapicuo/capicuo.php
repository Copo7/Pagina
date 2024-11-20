<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero capicuo</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Introduce Numero</label>
        <input type="number" name="numero" required>
        <input type="submit" value="Comprobar">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    function es_capicua($numero)
    {
        $i = 0;
        $capicua = true;
        $longitud = strlen($numero);
        while ($capicua && $i < ($longitud / 2)) 
        {
            if ($numero[$i] != $numero[$longitud - $i - 1]) 
            {
                $capicua = false;
            } 
            else {
                $i++;
            }
        }
        return $capicua;
    }

    $numero = $_POST["numero"];

    if (es_capicua($numero)) {
        echo "<p>El número $numero es capicuo.</p>";
    } else {
        echo "<p>El número $numero no es capicuo.</p>";
    }
}
?>

</body>
</html>