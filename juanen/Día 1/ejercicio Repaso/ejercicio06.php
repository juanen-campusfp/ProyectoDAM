<?php
include('./../tools/mis_funciones.php');
/**
 * 6. Genere un número aleatorio entre 10 y 9999 y muestre
la suma de todos sus dígitos.
 */
//Número aleatorio
$n = rand(10,9999);
escribe($n);
escribe(sumar_digitos($n));













?>