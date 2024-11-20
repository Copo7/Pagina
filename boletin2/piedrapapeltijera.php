<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piedra Papel Tijera</title>
</head>
<body>
<h2>Piedra Papel Tijera</h2>
<form method="post" action="">
    <label>
        <input type="radio" name="choice" value="0" required> Piedra
    </label><br>
    <label>
        <input type="radio" name="choice" value="1"> Papel
    </label><br>
    <label>
        <input type="radio" name="choice" value="2"> Tijera
    </label><br>
    <button type="submit">Jugar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $humano = intval($_POST['choice']);
    
    $maquina = rand(0, 2);
    $opciones = ['Piedra', 'Papel', 'Tijera'];
    
    echo "<p>Humano eligió: " . $opciones[$humano] . "</p>";
    echo "<p>Máquina eligió: " . $opciones[$maquina] . "</p>";

    if ($humano === $maquina) {
        echo "<p>Hay un empate.</p>";
    } elseif (
        ($humano === 0 && $maquina === 2) || ($humano === 1 && $maquina === 0) || ($humano === 2 && $maquina === 1)    
    ) {
        echo "<p>¡Humano gana! " . $opciones[$humano] . " vence a " . $opciones[$maquina] . ".</p>";
    } else {
        echo "<p>¡Máquina gana! " . $opciones[$maquina] . " vence a " . $opciones[$humano] . ".</p>";
    }
    echo '<br><a href="">Jugar de nuevo</a>'; 
}
?>
</body>
</html>
