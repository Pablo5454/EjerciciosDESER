<?php

/*
Ejercicio 04
Define tres variables y ordenar en orden ascendente. Despúes en orden descendente. Con IF. Guarde como ejercicio04.php
*/

$var1 = 3;
$var2 =-4;
$var3 =1;

$primero;
$segundo;
$tercero;

if ($var1 > $var2 and $var1 > $var3){
    $primero = $var1;
    
    if ($var2 > $var3){
        $segundo = $var2;
        $tercero = $var3;
    } else {
        $segundo = $var3;
        $tercero = $var2;
    }
}
if ($var2 > $var1 and $var2 > $var3){
    $primero = $var2;
    
    if ($var1 > $var3){
        $segundo = $var1;
        $tercero = $var3;
    } else {
        $segundo = $var3;
        $tercero = $var1;
    }
}
if ($var3 > $var1 and $var3 > $var2){
    $primero = $var3;
    if ($var2 > $var1){
        $segundo = $var2;
        $tercero = $var1;
    } else {
        $segundo = $var1;
        $tercero = $var2;
    }
}

echo "PRIMERO: " , $primero , ", SEGUNDO: " , $segundo , ", TERCERO: " , $tercero;

?>