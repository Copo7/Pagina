<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cristian Fernandez Cornejo PaisesUE</title>
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
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<body>
    <h1>Paises de la Unión Europea</h1>
    <form action="" method="POST">
        <label for="ordena_por">Ordenar por:</label>
        <select name="ordenar_por" id="ordena_por">
            <option value="nombre">Nombre</option>
            <option value="capital">Capital</option>
            <option value="poblacion">Población</option>
            <option value="codigo_iso">Código ISO</option>
        </select>
        <select name="direccion" id="direccion">
            <option value="_ascd">ascendente</option>
            <option value="_desc">descendente</option>
        </select>
        <input type="submit" value="Ordenar">
    </form>
    <table>
        <tr>
            <th>Bandera</th>
            <th>Nombre</th>
            <th>Capital</th>
            <th>Población</th>
            <th>Código ISO</th>
        </tr>
        <?php include "codigo.php"; ?>
        <?php foreach ($paisesUE as $pais): ?>
            <tr>
                <td><img src="https://flagcdn.com/16x12/<?= strtolower($pais["codigo_iso"]) ?>.png" alt="Bandera de <?= htmlspecialchars($pais["nombre"]) ?>"></td>
                <td><?= htmlspecialchars($pais["nombre"]) ?></td>
                <td><?= htmlspecialchars($pais["capital"]) ?></td>
                <td><?= number_format($pais["poblacion"]) ?></td>
                <td><?= htmlspecialchars($pais["codigo_iso"]) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
