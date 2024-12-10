<?php
session_start(); // Asegura que las sesiones estén activadas
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir session</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: <?= isset($_SESSION['fondo']) ? htmlspecialchars($_SESSION['fondo']) : 'white' ?>; text-align: center; padding: 20px; }
        h1 { color: #00796b; }
        form { background: #ffffff; padding: 15px; border-radius: 8px; display: inline-block; }
        label { color: #00796b; }
        select, input[type="text"], input[type="submit"] { padding: 8px; margin: 5px; }
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
    <h1>Añadir sesion</h1>
    <form action="sesion.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre de la sesión" required>
        <input type="text" name="valor" placeholder="Valor de la sesión" required>
        <button type="submit">Añadir</button>
    </form>

    <?php if (!empty($_SESSION)): ?>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Valor</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($_SESSION as $nombre => $valor): ?>
            <tr>
                <td><?= htmlspecialchars($nombre) ?></td>
                <td><?= htmlspecialchars($valor) ?></td>
                <td><a href="borrarsesiones.php?session=<?= urlencode($nombre) ?>">Borrar</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>
</body>
</html>