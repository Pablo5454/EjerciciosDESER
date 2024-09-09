<?php

/*
Ejercicio 15
Reemplazar caracteres: Haz un programa que reciba una cadena de texto y reemplace todas las vocales por un carácter específico.*/

$letras  = array('a', 'e', 'i', 'o', 'u');
$sustituir = array('A', 'E', 'I', 'O', 'U');
$palabra = 'ksdefdfdaasf';

echo str_replace($letras, $sustituir, $palabra);

echo "";


?>