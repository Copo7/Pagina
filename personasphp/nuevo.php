<?php

function calculaEdad($fecha)
{
    $hoy = date('Y-m-d');
    echo "Fecha actual: $hoy\n";
    
    $hoy_array = explode('-', $hoy);
    $fecha_array = explode('-', $fecha);

    $edad = $hoy_array[0] - $fecha_array[0];
    
    if ($hoy_array[1] < $fecha_array[1] || ($hoy_array[1] == $fecha_array[1] && $hoy_array[2] < $fecha_array[2])) {
        $edad--;
    }
    
    echo "Edad: $edad\n";
    return $edad;
}

include "codigo.php";

if(isset($_REQUEST['filtro']) and $_REQUEST['filtro']!='')
{
    $personas_filtro=[];
    foreach($personas as $persona)
    {
        if(str_contains($persona['nombre'], $_REQUEST['filtro']) 
        or str_contains($persona['apellidos'], $_REQUEST['filtro']) 
        or str_contains($persona['dni'], $_REQUEST['filtro']))
        {
            $personas_filtro[]=$persona;
        }
    }
    $personas=$personas_filtro;
}

function ordena_por_nombred_ascd($persona1, $persona2)
{
    return strcmp($persona1['nombre'], $persona2['nombre']);
}
    usort($personas, 'ordena_por_'.$_REQUEST['ordenar_por'].$_REQUEST['direccion']);
    include "personas.php";

?>