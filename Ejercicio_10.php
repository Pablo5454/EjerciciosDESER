<?php

/*
Ejercicio 10
Tengo un billete de avión para Denver definir la variable dataSalida (fecha y hora). Necesito que el programa que calcule tiempo me falta para coger dicho avión, dependiendo de la hora actual.*/

$dataSalida = new DateTime("2025-11-13 13:45:00");

$current_date = new DateTime('now');

$diferencia = $current_date->diff($dataSalida);   

echo $diferencia->format('Años:  %y, Meses:  %m, Dias:  %d , Horas: %h , Minutos: %m , Segundos: +%s');

?>