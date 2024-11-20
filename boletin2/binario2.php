<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Decimal</td>
            <td>Hexadecimal</td>
            <td>Binario</td>
            <td>Símbolo</td>
        </tr>
        <?php
            function a_binario($numero)
            {
                $binario = '';

                if ($numero == 0) {
                    return '0';
                }

                while ($numero > 0) {
                    $binario = ($numero % 2) . $binario;
                    $numero = floor($numero / 2);
                }
                return $binario;
            }

            function a_hexadecimal($numero)
            {
                $simbolos = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F'];
                $hexadecimal = '';

                if ($numero == 0) {
                    return '0';
                }

                while ($numero > 0) {
                    $hexadecimal = $simbolos[$numero % 16] . $hexadecimal;
                    $numero = floor($numero / 16);
                }
                return $hexadecimal;
            }

            function a_simbolo($numero)
            {
                return ($numero >= 32 && $numero <= 126) ? $numero : ''; 
            }

            for ($i = 0; $i < 256; $i++): ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo strtoupper(a_hexadecimal($i)); ?></td>
                    <td><?php echo a_binario($i); ?></td>
                    <td>&#<?php echo $i ?>;</td>
                </tr>
        <?php endfor; ?>
    </table>
</body>
</html>
