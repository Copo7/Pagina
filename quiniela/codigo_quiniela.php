<?php
// Un array de los equipos con su nombre y codigo
$equipos = [
    ['codigo' => 0, 'nombre' => 'Deportivo Alaves'],
    ['codigo' => 1, 'nombre' => 'Athletic Club'],
    ['codigo' => 2, 'nombre' => 'Atlético de Madrid'],
    ['codigo' => 3, 'nombre' => 'celta'],
    ['codigo' => 4, 'nombre' => 'Espanyol'],
    ['codigo' => 5, 'nombre' => 'Barcelona'],
    ['codigo' => 6, 'nombre' => 'Sevilla'],
    ['codigo' => 7, 'nombre' => 'Osasuna'],
    ['codigo' => 8, 'nombre' => 'Rayo Vallecano'],
    ['codigo' => 9, 'nombre' => 'Real Betis'],
    ['codigo' => 10, 'nombre' => 'Real Madrid'],
    ['codigo' => 11, 'nombre' => 'Real Sociedad'],
    ['codigo' => 12, 'nombre' => 'Valencia'],
    ['codigo' => 13, 'nombre' => 'Real Valladolid'],
    ['codigo' => 14, 'nombre' => 'Las palmas'],
    ['codigo' => 15, 'nombre' => 'Villarreal'],
    ['codigo' => 16, 'nombre' => 'Osasuna'],
    ['codigo' => 17, 'nombre' => 'Leganes'],
    ['codigo' => 18, 'nombre' => 'Getafe'],
    ['codigo' => 19, 'nombre' => 'Girona']
];
// Desordenamos los equipos
shuffle($equipos);

// Con este bucle generamos los partidos con su apuesta
$partidos = [];
for ($i = 0; $i < count($equipos); $i += 2) {
    if (isset($equipos[$i + 1])) {
        $partido = [];
        $partido['equipo1'] = $equipos[$i];
        $partido['equipo2'] = $equipos[$i + 1];
        $partido['apuesta'] = rand(0, 2);
        $partidos[] = $partido;
    }
}
?>
