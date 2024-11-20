<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiniela Cristian Fernandez Cornejo</title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/0/07/%D0%A4%D0%9A_%22%D0%9A%D0%BE%D0%BB%D0%BE%D1%81%22_%28%D0%97%D0%B0%D1%87%D0%B5%D0%BF%D0%B8%D0%BB%D0%BE%D0%B2%D0%BA%D0%B0%2C_%D0%A5%D0%B0%D1%80%D1%8C%D0%BA%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F_%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C%29_-_%D0%A4%D0%9A_%22%D0%91%D0%B0%D0%BB%D0%BA%D0%B0%D0%BD%D1%8B%22_%28%D0%97%D0%B0%D1%80%D1%8F%2C_%D0%9E%D0%B4%D0%B5%D1%81%D1%81%D0%BA%D0%B0%D1%8F_%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C%29_%2818790931100%29.jpg" type="image/icon type">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://s0.smartresize.com/wallpaper/657/646/HD-wallpaper-uefa-champions-league-football-sports.jpg');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        h1 {
            text-align: center;
            color: white;
            margin-bottom: 20px;
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        th {
            background-color: #2980b9;
            color: white;
            padding: 10px;
            text-align: left;
        }
        td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        tr:hover {
            background-color: yellow;
        }
        img {
            width: 40px; 
            height: 40px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <h1>Quiniela Cristian Fernandez Cornejo</h1>
    <table border="1" cellpadding="5">
        <tr>
            <th>Equipo 1</th>
            <th>Equipo 2</th>
            <th>Apuesta</th>
        </tr>
        <?php
        // Vinculamos el fichero codigo_quiniela.php
        include "codigo_quiniela.php";

        foreach ($partidos as $partido): 
            $nombre_equipo1 = $partido['equipo1']['nombre'];
            $codigo_equipo1 = $partido['equipo1']['codigo'];
            $nombre_equipo2 = $partido['equipo2']['nombre'];
            $codigo_equipo2 = $partido['equipo2']['codigo'];
        
            // Generamos la apuesta según el valor dado
            if ($partido['apuesta'] == 0) {
                $apuesta = '1';
            } elseif ($partido['apuesta'] == 1) {
                $apuesta = 'X';
            } else {
                $apuesta = '2';
            }
        ?>
            <tr>
                <td>
                    <img src='imagenes/<?php echo $codigo_equipo1; ?>.png' alt='<?php echo $nombre_equipo1; ?>'> <?php echo $nombre_equipo1; ?>
                </td>
                <td>
                    <img src='imagenes/<?php echo $codigo_equipo2; ?>.png' alt='<?php echo $nombre_equipo2; ?>'> <?php echo $nombre_equipo2; ?>
                </td>
                <td><?php echo $apuesta; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>        
</html>
