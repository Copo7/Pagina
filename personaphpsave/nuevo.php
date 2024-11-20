<?php
include "codigo.php"; // Asegúrate de incluir esto al inicio para definir $personas

function calculaEdad($fecha)
{
    $hoy = date('Y-m-d');
    $hoy_array = explode('-', $hoy);
    $fecha_array = explode('-', $fecha);

    $edad = $hoy_array[0] - $fecha_array[0];
    if ($hoy_array[1] < $fecha_array[1] || ($hoy_array[1] == $fecha_array[1] && $hoy_array[2] < $fecha_array[2])) {
        $edad--;
    }
    return $edad;
}

if (isset($_REQUEST['filtro']) && $_REQUEST['filtro'] != '') {
    $personas_filtro = [];
    foreach ($personas as $persona) {
        if (
            str_contains($persona['nombre'], $_REQUEST['filtro']) ||
            str_contains($persona['apellidos'], $_REQUEST['filtro']) ||
            str_contains($persona['dni'], $_REQUEST['filtro'])
        ) {
            $personas_filtro[] = $persona;
        }
    }
    $personas = $personas_filtro;
}

if (isset($_REQUEST['ordenar_por']) && isset($_REQUEST['direccion'])) {
    $funcion_orden = 'ordena_por_' . $_REQUEST['ordenar_por'] . $_REQUEST['direccion'];
    if (function_exists($funcion_orden)) {
        usort($personas, $funcion_orden);
    }
}

include "personas.php";
?>
