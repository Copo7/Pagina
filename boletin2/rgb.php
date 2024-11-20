<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RGB</title>
</head>
<body>
    <table>
        <tr>
            <td>R</td>
            <td>G</td>
            <td>B</td>
            <td>Color</td>
        </tr>
            <?php for($r = 0; $r < 256; $r=$r+16): ?>
            <?php for($g = 0; $g < 256; $g=$g+16): ?>
            <?php for($b = 0; $b < 256; $b=$b+16): ?>
            <tr>
                <td align="right"><?php echo $r ?></td>
                <td align="right"><?php echo $g ?></td>
                <td align="right"><?php echo $b ?></td>
                <td align="right" style="background-color: rgb(<?php echo $r?>,<?php echo $g ?>,<?php echo $b ?>);"></td>
            </tr>
        <?php endfor; ?>
        <?php endfor; ?>
        <?php endfor; ?>

    </table>
</body>
</html>