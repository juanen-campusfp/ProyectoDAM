<?php
include('./../tools/mis_funciones.php');
/**
 * 12. Basandose en el Ejercicio 11 diga si con los 
valores obtenidos podría o no dibujar un triángulo.
NOTA: no se trata de averiguar de qué tipo de 
triángulo se trata, solo se pide que se pueda formar
uno, da igual su tipo.
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

//Regla : La suma de los dos lados más pequeños debe ser mayor a la del lado mayor

if($a_numeros[0] +
    $a_numeros[1] > 
    $a_numeros[2]) 
    escribe("Forman triángulos");

?>