<?php
function calcular_media($array)
{
    $suma=0;
    $tam=count($array);
    for($i=0; $i<$tam; $i++)
    {
        $suma=$suma+$array[$i];
    }
    return $suma/$tam;
}

$numeros=[1,2,3,4,5,6,7];
echo "Array: ".implode(',',$numeros);
echo "Media".calcular_media($numeros);
?>