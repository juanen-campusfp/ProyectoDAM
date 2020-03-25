<?php
include('./../tools/mis_funciones.php');
/**
 * 7. Repita este proceso de sumar los dígitos del 
número obtenido hasta que obtenga un número de sólo un
dígito.
  Ejemplo, número inicial:  3567 
  La suma da 3 + 5 + 6 +  = 21
  La suma de los dígitos de 21 es
  2 + 1 = 3
  El resultado final es  3.
  Nota: Debe mostrar por pantalla la descomposición
  de cada número en sus dígitos y debe dar el resultado
  de la suma de cada uno de ellos.

 */
//Converit un número en una cadena y luego en un array
$n = rand(10,9999);
$suma = $n;
escribe("Numero aleatorio : $n");
escribe(sumar_digitos($suma));








?>