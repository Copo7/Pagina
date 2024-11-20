<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiaSemana</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="dia" placeholder="dia" value="<?php echo isset($_POST['dia']) ? $_POST['dia'] : ''; ?>"> <br>
        <input type="text" name="mes" placeholder="mes" value="<?php echo isset($_POST['mes']) ? $_POST['mes'] : ''; ?>"> <br>
        <input type="text" name="anio" placeholder="anio" value="<?php echo isset($_POST['anio']) ? $_POST['anio'] : ''; ?>"> <br>
        <input type="submit" value="Enviar">    
    </form>
    <?php
    function dia_semana($dia, $mes, $anio){
        $dias_semana = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
        $a = floor((14 - $mes) / 12);
        $y = $anio - $a;
        $m = $mes + 12 * $a - 2;

        $d = ($dia + $y + floor($y / 4) - floor($y / 100) + floor($y / 400) + floor((31 * $m) / 12)) % 7;
        return $dias_semana[$d];
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $dia = intval($_POST['dia']);
        $mes = intval($_POST['mes']);
        $anio = intval($_POST['anio']);
        
        echo "<p>Ese día fue: " . dia_semana($dia, $mes, $anio) . "</p>";
    }
    ?>
</body>
</html>

