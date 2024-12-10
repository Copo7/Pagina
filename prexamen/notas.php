<?php

$hola= rand(1, 10);

if ($hola >= 0 && $hola <= 4){
    echo "suspenso";  
}elseif ($hola >= 5 && $hola <= 6){
    echo "aprobado";
}elseif ($hola == 7 && $hola <= 8){
    echo "notable";
}elseif ($hola == 9 && $hola >= 10){
    echo "sobresaliente";
}
?>