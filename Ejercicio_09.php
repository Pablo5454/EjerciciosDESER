<?php

/*
Ejercicio 09
Definir dos notas en dos variables y calcular si la media es aprobada o suspendida.
*/

$Nota1 = 3;
$Nota2 = 2;

$Media = ($Nota1 + $Nota2) / 2;

if ($Media >= 5 && $Media <= 10) {
    echo "Aprobado.";
} else if ($Media >= 0 && $Media <5) {
    echo "Suspendido.";
}

?>