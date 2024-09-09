<?php

/*
Ejercicio 11
Contar vocales: Escribe un programa que reciba una cadena de texto y cuente cuántas vocales (a, e, i, o, u) tiene.*/

$cadenaString = "ksdfdfdaasf";
$contadorVocales = "";

$longitudCadena = strlen($cadenaString);

for($i = 0; $i < $longitudCadena; $i++) {

    if(in_array($cadenaString[$i], ["a","e","i","o","u"])){
        $contadorVocales++;
    }  
}
if ($contadorVocales > 0){
    echo "Número de vocales: " , $contadorVocales;
} else {
    echo "Sin vocales";
} 

?>