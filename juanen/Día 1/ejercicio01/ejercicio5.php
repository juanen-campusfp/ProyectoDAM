<!-- Haga un programa que reciba un número de tres dígitos y que lo escriba en orden inverso. -->
<?php
// $numero = 472;
$numero = rand(100,999);
print("Número ordenado normal: $numero <br>");
//TRES Numeros a parte
$numero1= (int)($numero / 100);

$numero2= (int)($numero / 10)-$numero1*10;

$numero3= (int)$numero-($numero2 * 10 + $numero1 *100);
//Imprimir
print("Número alrevés: ");
print($numero3);
print($numero2);
print($numero1);








?>