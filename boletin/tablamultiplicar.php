<!DOCTYPE html>
<html lang="es">
<head>
    <title>Tarea Cristian Fernandez Cornejo, tarea Multiplicar</title>
</head>
<body>
    <h2>Tabla de multiplicar de Cristian Fernández Cornejo</h2>
    <table border="1">
        <?php
        for ($i=1;$i<=10;$i++) {
            echo "<tr>";
            for ($j =1;$j<=10;$j++) {
                echo "<td>".$i*$j."</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>