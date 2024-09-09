<?php

/*
Ejercicio 03
Definir una variable llamada “pares” y asignarle un valor booleano.
Si es true, mostrar en pantalla números pares del 1 al número aleatorio menor que 99. Si se le ha asignado el valor FALSE a la variable pares, en la pantalla tienen que aparecer los valores impares.


*/

$pares = true;

$numero = rand(1, 99);

for ($i = 0; $i < $numero; $i++) {
    if ($i % 2== 0 && $pares == true) {
        echo $i;
    } else if ($i % 2 != 0 && $pares == false){
        echo $i;
    }
}

?>