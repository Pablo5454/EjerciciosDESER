<?php

/*
Ejercicio 06
Hacer una página PHP que tenga dos variables y nos indique si la suma de los números es mayor que el producto (resultado de la multiplicación) de ellos o al contrario: Ejemplo:
Numero1=1; numero2=2 —> “ la suma es mayor que el producto”
Numero1=1; numero2=2 —>“ el producto es mayor que la suma”

*/

$numero1 = 5;
$numero2 = 1;

if($numero1 * $numero2 > $numero1 + $numero2){
    echo "El producto es mayor que la suma.";
    
} else {
    echo "La suma es mayor que el producto.";

}

?>