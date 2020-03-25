<!-- Escriba un programa que reciba un número con decimales y muestre  solo la parte decimal. -->
<?php
$decimal1 = rand(1,999);
$decimal2 = rand(1,99);
// print($decimal2);
// print("<br>");
$decimales = $decimal1 + ($decimal2 /100);
 print("Número entero: ". $decimales . '<br>');
// $decimales = 64.43;

// //Algoritmo
//  $decimalesEntero = (int) $decimales;
//  $decimalesCambio =($decimales- ($decimalesEntero));
//  print("Parte decimal :". $decimalesCambio);
print("Parte decimal : " . $decimal2);



?>