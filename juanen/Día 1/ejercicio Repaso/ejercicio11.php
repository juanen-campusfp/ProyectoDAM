<?php
include('./../tools/mis_funciones.php');
/**
 * 11. Basandose en el Ejercicio 10, ordenelos de menor
a mayor y muestrelos.
 */
$a_numeros = array();
$max_numeros = 3;//Variable de control 
$a_numeros [] = rand(1,5);
while(count($a_numeros) < 3){
$n = rand(1,5);
    if(!in_array($n,$a_numeros)){
        $a_numeros [] = $n;
    }
}
sort($a_numeros,SORT_STRING);
escribe_array($a_numeros);
escribe("Fin del 11");

escribe(gettype())






?>