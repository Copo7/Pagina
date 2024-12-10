<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <?php for($i=1;$i<=10; $i++): ?>
                <td><?php echo $i ?></td>
            <?php endfor; ?>
        </tr>
    </table>
</body>
</html>