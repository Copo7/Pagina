<?php
$usuarios = [
    'admin' => [
        'password' => '1234',
        'nombre_completo' => 'Administrador',
        'email' => 'administrador@gmail.com',
        'telefono' => '434343434',
    ],
    'pepito' => [
        'password' => 'kakatua',
        'nombre_completo' => 'Paco',
        'email' => 'paco@gmail.com',
        'telefono' => '696969696',
    ],
];

header('Location: index.php');
