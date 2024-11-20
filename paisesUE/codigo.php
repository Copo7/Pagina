<?php
// Array de países de la Unión Europea
$paisesUE = [
    [
        "nombre" => "Alemania",
        "capital" => "Berlín",
        "poblacion" => 83240000,
        "codigo_iso" => "DE"
    ],
    [
        "nombre" => "Austria",
        "capital" => "Viena",
        "poblacion" => 8917000,
        "codigo_iso" => "AT"
    ],
    [
        "nombre" => "Bélgica",
        "capital" => "Bruselas",
        "poblacion" => 11590000,
        "codigo_iso" => "BE"
    ],
    [
        "nombre" => "Bulgaria",
        "capital" => "Sofía",
        "poblacion" => 6927000,
        "codigo_iso" => "BG"
    ],
    [
        "nombre" => "Chipre",
        "capital" => "Nicosia",
        "poblacion" => 1207000,
        "codigo_iso" => "CY"
    ],
    [
        "nombre" => "Croacia",
        "capital" => "Zagreb",
        "poblacion" => 4076000,
        "codigo_iso" => "HR"
    ],
    [
        "nombre" => "Dinamarca",
        "capital" => "Copenhague",
        "poblacion" => 5831000,
        "codigo_iso" => "DK"
    ],
    [
        "nombre" => "Eslovaquia",
        "capital" => "Bratislava",
        "poblacion" => 5457000,
        "codigo_iso" => "SK"
    ],
    [
        "nombre" => "Eslovenia",
        "capital" => "Liubliana",
        "poblacion" => 2100000,
        "codigo_iso" => "SI"
    ],
    [
        "nombre" => "España",
        "capital" => "Madrid",
        "poblacion" => 47350000,
        "codigo_iso" => "ES"
    ],
    [
        "nombre" => "Estonia",
        "capital" => "Tallin",
        "poblacion" => 1331000,
        "codigo_iso" => "EE"
    ],
    [
        "nombre" => "Finlandia",
        "capital" => "Helsinki",
        "poblacion" => 5536000,
        "codigo_iso" => "FI"
    ],
    [
        "nombre" => "Francia",
        "capital" => "París",
        "poblacion" => 67410000,
        "codigo_iso" => "FR"
    ],
    [
        "nombre" => "Grecia",
        "capital" => "Atenas",
        "poblacion" => 10720000,
        "codigo_iso" => "GR"
    ],
    [
        "nombre" => "Hungría",
        "capital" => "Budapest",
        "poblacion" => 9773000,
        "codigo_iso" => "HU"
    ],
    [
        "nombre" => "Irlanda",
        "capital" => "Dublín",
        "poblacion" => 4983000,
        "codigo_iso" => "IE"
    ],
    [
        "nombre" => "Italia",
        "capital" => "Roma",
        "poblacion" => 60240000,
        "codigo_iso" => "IT"
    ],
    [
        "nombre" => "Letonia",
        "capital" => "Riga",
        "poblacion" => 1908000,
        "codigo_iso" => "LV"
    ],
    [
        "nombre" => "Lituania",
        "capital" => "Vilna",
        "poblacion" => 2794000,
        "codigo_iso" => "LT"
    ],
    [
        "nombre" => "Luxemburgo",
        "capital" => "Luxemburgo",
        "poblacion" => 634800,
        "codigo_iso" => "LU"
    ],
    [
        "nombre" => "Malta",
        "capital" => "La Valeta",
        "poblacion" => 514600,
        "codigo_iso" => "MT"
    ],
    [
        "nombre" => "Países Bajos",
        "capital" => "Ámsterdam",
        "poblacion" => 17480000,
        "codigo_iso" => "NL"
    ],
    [
        "nombre" => "Polonia",
        "capital" => "Varsovia",
        "poblacion" => 38390000,
        "codigo_iso" => "PL"
    ],
    [
        "nombre" => "Portugal",
        "capital" => "Lisboa",
        "poblacion" => 10310000,
        "codigo_iso" => "PT"
    ],
    [
        "nombre" => "República Checa",
        "capital" => "Praga",
        "poblacion" => 10710000,
        "codigo_iso" => "CZ"
    ],
    [
        "nombre" => "Rumanía",
        "capital" => "Bucarest",
        "poblacion" => 19240000,
        "codigo_iso" => "RO"
    ],
    [
        "nombre" => "Suecia",
        "capital" => "Estocolmo",
        "poblacion" => 10380000,
        "codigo_iso" => "SE"
    ]
];


function ordena_por_nombre_ascd($pais1, $pais2)    
{
    return strcmp($pais1['nombre'], $pais2['nombre']);
}

function ordena_por_capital_ascd($pais1, $pais2)    
{
    return strcmp($pais1['capital'], $pais2['capital']);
}

function ordena_por_codigo_iso_ascd($pais1, $pais2)    
{
    return strcmp($pais1['codigo_iso'], $pais2['codigo_iso']);
}

function ordena_por_poblacion_ascd($pais1, $pais2)
{
    if($pais1['poblacion']==$pais2['poblacion'])
    {
        return 0;
    }else if($pais1['poblacion']>$pais2['poblacion'])
    {
        return 1;
    }else
    {
        return -1;
    }
}    



function ordena_por_nombre_desc($pais1, $pais2)    
{
    return ordena_por_nombre_ascd($pais1, $pais2)*(-1);
}

function ordena_por_capital_desc($pais1, $pais2)    
{
    return ordena_por_capital_ascd($pais1, $pais2)*(-1);
}

function ordena_por_codigo_iso_desc($pais1, $pais2)    
{
    return ordena_por_codigo_iso_ascd($pais1, $pais2)*(-1);
}
function ordena_por_poblacion_desc($pais1, $pais2)    
{
    return ordena_por_poblacion_ascd($pais1, $pais2)*(-1);
}

if(isset($_REQUEST['ordenar_por']) and isset($_REQUEST['direccion']))
{
    usort($paisesUE, 'ordena_por_'.$_REQUEST['ordenar_por'].$_REQUEST['direccion']);
}

?>