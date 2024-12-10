<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Cookies</title>
    <style>
        body { font-family: Arial, sans-serif; background-color:<?php echo (isset($_COOKIE['fondo']) ? $_COOKIE['fondo'] : 'white') ?>; text-align: center; padding: 20px; }
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
    <h1>Añadir cookies</h1>
    <form action="codigo.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre de la cookie" required>
        <input type="text" name="valor" placeholder="Valor de la cookie" required>
        <button type="submit">Añadir</button>
    </form>
    <?php if(count($_COOKIE)>0):?>
    <table border="1">
        <tr>
            <td>Nombre</td>
            <td>Valor</td>
            <td>Acción</td>
        </tr>
    <?php foreach($_COOKIE as $nombre=>$valor):?>
        <tr>
            <td><?php echo $nombre ?></td>
            <td><?php echo $valor  ?></td>
            <td> <a href="borrarcookie.php?cookie=<?php echo $nombre ?>">Borrar</a></td>
        </tr>
    <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </body>
</html>