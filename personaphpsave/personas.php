<?php
if (!isset($personas) || !is_array($personas)) {
    $personas = []; // Asegúrate de que $personas esté inicializado como un array vacío
}
?>

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
    <?php foreach ($personas as $persona): ?>
        <tr>
            <td><?= htmlspecialchars($persona["nombre"]) ?></td>
            <td><?= htmlspecialchars($persona["apellidos"]) ?></td>
            <td><?= date_format(date_create($persona["fecha_nacimiento"]), "d/m/Y") ?></td>
            <td><?= calculaEdad($persona["fecha_nacimiento"]) ?></td>
            <td><?= htmlspecialchars($persona["dni"]) ?></td>
            <td><?= htmlspecialchars($persona["telefono"]) ?></td>
            <td><?= htmlspecialchars($persona["email"]) ?></td>
            <td><?= htmlspecialchars($persona["direccion"]) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
