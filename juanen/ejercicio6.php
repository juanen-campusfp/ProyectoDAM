<!-- Escriba un programa que reciba un número con decimales y muestre  solo la parte decimal. -->
<?php

$decimales = 64.43;

//Algoritmo
$decimalesEntero = (int) $decimales;
$decimalesCambio =($decimales-$decimalesEntero) * 100;
print((int)$decimalesCambio);




?>