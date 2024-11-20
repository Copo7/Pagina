<!DOCTYPE html>
<html lang="es">
<head>
    <title>Generador de Contraseña</title>
</head>
<body>
    <h1>Generador de contraseñas Cristian Fernandez Cornejo</h1> <br>
    <form method="post">
        <input type="number" name="min"   placeholder="minuscula" require value="<?php echo isset($_POST['min'])?$_POST['min']:'';?>"> <br>
        <input type="number" name="may"   placeholder="mayuscula" require value="<?php echo isset($_POST['may'])?$_POST['may']:'';?>"><br>
        <input type="number" name="num"    placeholder="numeros" require value="<?php echo isset($_POST['num'])?$_POST['num']:'';?>"><br>
        <input type="number" name="sim"  placeholder="simbolos especiales" require value="<?php echo isset($_POST['sim'])?$_POST['sim']:'';?>"><br>
        <input type="submit" value="enviar"><br>
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $may = $_POST["may"];
    $min = $_POST["min"];
    $num = $_POST["num"];
    $sim = $_POST["sim"];

    $mayuscula="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$minuscula="abcdefghijklmnopqrstuvwxyz";
	$numero="0123456789";
	$especiales="@$#:_-?&!*";

    $desordenada='';
    for($i=0; $i<$may; $i++)
    {
        $desordenada=$desordenada.$mayuscula[rand(0, strlen($mayuscula)-1)];
    }
    for($i=0; $i<$min; $i++)
    {
        $desordenada=$desordenada.$minuscula[rand(0, strlen($minuscula)-1)];
    }
    for($i=0; $i<$num; $i++)
    {
        $desordenada=$desordenada.$numero[rand(0, strlen($numero)-1)];
    }
    for($i=0; $i<$sim; $i++)
    {
        $desordenada=$desordenada.$especiales[rand(0, strlen($especiales)-1)];
    }
    $desordenada=str_shuffle($desordenada);
    echo $desordenada;
 
}
    ?>
</body>
</html>