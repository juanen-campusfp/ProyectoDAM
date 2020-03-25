<?php
include('./../tools/mis_funciones.php');
/**
 * 10. Copia el ejercicio 9 y modicalo para que no se 
repitan números, es decir, los 3 números generados
deben ser diferentes.
 */
//Trabajare con un array que contendrá los valores aleatorios obtenidos,
//Tambien usare una variable de control para saber cuántos numeros debo general

$a_numeros = array();
$max_numeros = 3;//Variable de control 
$a_numeros [] = rand(1,5);
while(count($a_numeros) < 3){
$n = rand(1,5);
    if(!in_array($n,$a_numeros)){
        $a_numeros [] = $n;
    }
}
escribe_array($a_numeros);
escribe("Fin del 10");







?>