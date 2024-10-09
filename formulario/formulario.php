<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Formulario</title>
</head>
<body>
    <h1>Datos Recibidos</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Campo</th>
            <th>Valor</th>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><?php echo ($_POST['nombre']); ?></td>
        </tr>
        <tr>
            <td>Dirección</td>
            <td><?php echo ($_POST['Direccion']); ?></td>
        </tr>
        <tr>
            <td>Teléfono</td>
            <td><?php echo ($_POST['telefono']); ?></td>
        </tr>
        <tr>
            <td>Menú</td>
            <td><?php echo ($_POST['menu']); ?></td>
        </tr>
        <tr>
            <td>Tamaño</td>
            <td><?php echo ($_POST['tamaño']); ?></td>
        </tr>
        <tr>
            <td>Casilla</td>
            <td><?php echo ($_POST['casilla']); ?></td>
        </tr>
    </table>
</body>
</html>
