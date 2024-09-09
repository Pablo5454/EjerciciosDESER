<?php

/*
Ejercicio 08
Diseñar un programa que determine la cantidad total a pagar por una llamada telefónica de acuerdo a las siguientes premisas:
Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.
Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 céntimos.


*/

$minutos = 4;
$resto;
$Total;
if($minutos < 3){
    $Total = 0.10;
} else if ($minutos >= 3){
    $resto = ($minutos -3)*0.05;
    $Total = 0.10 + $resto;
}
echo "Minutos de la llamada: " , $minutos;
echo "<br>";
echo "El coste total de la llamada es: " , $Total;
?>