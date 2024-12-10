<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="css/datosclientes.css" rel="stylesheet">
</head>
<body>
</html>
<p>Aqui va un listado de los clientes</p>
<table>
    <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>Apellidos</td>
        <td>Teléfono</td>
        <td>Email</td>
    </tr>
    <?php foreach($clientes as $cliente):?>
        <tr>
            <td><?php echo $cliente['id']?></td>
            <td><?php echo $cliente['nombre']?></td>
            <td><?php echo $cliente['apellidos']?></td>
            <td><?php echo $cliente['telefonos']?></td>
            <td><?php echo $cliente['email']?></td>
        </tr>
        <?php endforeach;?>
</table>
</body>
