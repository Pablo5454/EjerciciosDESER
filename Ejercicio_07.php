<?php

/*
Ejercicio 07
Definir un número en una variable  y decir a qué nota le corresponde.
Entre 1 y 4,9: suspenso
Entre 5 y 5,9: suficiente
Entre 6 y 6,9: bien
Entre 7 y 8,9: muy bien
Entre 9 y 10: sobresaliente
Si no ERROR


*/

$nota = 6;

if($nota >= 1 && $nota < 5){
    echo "Suspenso";
} else if ($nota >= 5 && $nota <= 5.9){
    echo "Aprobado.";
} else if ($nota >= 6 && $nota <= 6.9){
    echo "Bien.";
} else if ($nota >= 7 && $nota <= 8.9){
    echo "Muy bien.";
} else if ($nota >= 9 && $nota <= 10){
    echo "Sobresaliente.";
} else {
    echo "ERROR.";
}

?>