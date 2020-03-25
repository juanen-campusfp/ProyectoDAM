<?php
/**Ejercicios 16

Haga un programa que genere números enteros 
aleatorios comprendidos entre  -1 y +100.

El programa debe estar embuclado y debe
generar números, que deben ser guardados
uno a uno en un array.

El bucle debe dejar de producir número a 
guardar cuando el número generado sea -1

Una vez que acabe de guardar números, diga
cuantos de ellos son pares, y cuantos de ellos
son impares, cuantos de ellos son primos

NOTA: el valor -1 no se guarda, solo se usará
como variable de control para dejar de 
repetir el bucle.
 *  
 */
include('./tools/mis_funciones.php');

$cont = 1;
$array_n_aleatorios = array();
do{
    
    $cont = 0;
    $n_aleatorios = rand(-1,100);
    
    $array_n_aleatorios[]=$n_aleatorios;
    foreach($array_n_aleatorios as $clave => $valor){
        if(es_Ipar($valor));
        if(es_primo($valor));
        }
    $n_aleatorios = 0;
    if($n_aleatorios == -1){
        $cont = 0;
    }
}while($cont == 1);

escribe_array($array_n_aleatorios,1);


/**Ejercicio 17 
 * 
 * Haga 	

El programa debe buscar números primos y 
debe ir guardándolos en un array hasta que
haya generado 50 primos.

Una vez conseguido esto, el programa debe
decir
a) Cuántos números aleatorios generó en total
b) Cuántos primos
c) La suma de todos los primos,
d) Cuantos primos diferentes tiene guardados
   en el array

*/









?>