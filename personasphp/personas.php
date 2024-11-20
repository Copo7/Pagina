<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
    <style>
        body { font-family: Arial, sans-serif; background: #e0f7fa; text-align: center; padding: 20px; }
        h1 { color: #00796b; }
        form { background: #ffffff; padding: 15px; border-radius: 8px; display: inline-block; }
        label { color: #00796b; }
        select, input[type="submit"] { padding: 8px; margin: 5px; }
        input[type="submit"] { background: #ff4081; color: white; border: none; border-radius: 4px; cursor: pointer; }
        input[type="submit"]:hover { background: #f50057; }
        table { margin: 20px auto; width: 80%; border-collapse: collapse; }
        th { background: #00796b; color: white; }
        tr:nth-child(even) { background: #f1f1f1; }
        tr:hover { background: #e0f7fa; }
        img { width: 32px; }
    </style>

</head>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<form action="" method="POST">
        <label for="ordena_por">Ordenar por:</label>
        <select name="ordenar_por" id="ordena_por">
            <option value="nombre">Nombre</option>
            <option value="apellidos">Apellidos</option>
            <option value="fecha_nacimiento">fecha_nacimiento</option>
        </select>
        <select name="direccion" id="direccion">
            <option value="_ascd">ascendente</option>
            <option value="_desc">descendente</option>
        </select>
        <input type="text" name="filtro" id="filtro">
        <input type="submit" value="Ordenar">
    </form>

        <table border="1" cellpadding="5">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>fecha_nacimiento</th>
            <th>Edad</th>
            <th>dni</th>
            <th>telefono</th>
            <th>email</th>
            <th>direccion</th>
        </tr>
        <?php foreach ($personas as $personas): ?>
            <tr>
                <td><?= ($personas["nombre"]) ?></td>
                <td><?= ($personas["apellidos"]) ?></td>
                <td><?=date_format(date_create($personas["fecha_nacimiento"]),"d/m/Y") ?></td>
                <td><?= calculaEdad($personas["fecha_nacimiento"])?></td>
                <td><?= ($personas["dni"]) ?></td>
                <td><?= ($personas["telefono"]) ?></td>
                <td><?= ($personas["email"]) ?></td>
                <td><?= ($personas["direccion"]) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>