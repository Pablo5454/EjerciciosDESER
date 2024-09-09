<?php

/*
Ejercicio 03
Define la constante PI y calcula el perímetro y superficie de un círculo cuyo radio es de 5cm. Guarde como ejercicio03.php
*/

$PI = pi();
$radio = 5;
$perimetro = 2 * $PI * $radio;
echo "PERIMETRO: " , $perimetro ; 
?>
<br>
<?php
$superficie = $PI * pow($radio, 2);
echo "SUPERFICIE " , $superficie;

?>