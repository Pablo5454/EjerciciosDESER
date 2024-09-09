<?php

/*
Ejercicio 13
Palíndromo: Escribe un programa que determine si una palabra es un palíndromo (se lee igual de adelante hacia atrás).*/

$cadenaString = "kak" ;

$cadenaInvertida = strrev($cadenaString);

if ($cadenaString == $cadenaInvertida){
    echo "La palabra introducida es un palíndromo.";
} else {
    echo "La palabra introducida no es un palíndromo.";
}

?>