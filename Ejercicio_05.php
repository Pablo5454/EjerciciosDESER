<?php

/*
Ejercicio 05
Hacer una página PHP que compruebe si el contenido de una variable es par o impar.
*/

$var1 = 2;
$resto = $var1 % 2;
if ($resto != 0){
    echo "EL NÚMERO ES IMPAR.";
    
} else {
    echo "EL NÚMERO ES PAR.";

}

?>