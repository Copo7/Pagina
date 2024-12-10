<?php
$productos = ["Discos SSD", "Memoria RAM", "Monitor" ];
print_r($productos);
echo $productos[0]."\n";
echo $productos[1]."\n";
echo $productos[2]."\n";

$edades = ['Juan' => '25', 'Maria' => '28', 'Paco' => '27'];

foreach($edades as $nombre=>$edad)
{
    echo "Nombre: ".$nombre." Edad: ".$edad."\n";
}

$total=0;
for($i=0; $i<=10; $i++)
{
$numeros[$i]=rand(1,30);
$total=$total+$numeros[$i];
}

echo implode("-",$numeros);
echo "\nLa media seria: ".$total/10;
?>