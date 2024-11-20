<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binario</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="numero" placeholder="Nº Decimal" value="<?php echo isset($_POST['numero']) ? $_POST['numero'] : ''; ?>"> <br>
        <input type="submit" value="Convertir a Binario">
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $numero = intval($_POST['numero']);
            $binario = '';

            if ($numero > 0) {
                while ($numero > 0) {
                    $binario = ($numero % 2) . $binario;
                    $numero = floor($numero / 2);
                }
                echo '<p>El número en binario es: ' . $binario . '</p>';
            } else {
                echo '<p>Por favor, ingresa un número decimal válido mayor que 0.</p>';
            }
        }
    ?>
</body>
</html>