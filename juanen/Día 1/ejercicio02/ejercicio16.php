<?php
include('./../tools/mis_funciones.php');
/*Ejercicio 16

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
*/

$numeros = array();//Array de n_aleatorio

while(true){
    $n_aleatorios = rand(-1,100);
    if($n_aleatorios == -1) break;
    $numeros[] = $n_aleatorios;
}
escribe_array($numeros);
//Contadores
$cont_pares = 0;
$cont_impares = 0;
$cont_primos = 0;
//Pares,Impar y Primos(llamar a funciones)
foreach($numeros as $clave => $valor){
    if(es_par($valor) == true) $cont_pares++;
    if(es_impar($valor)){
        $cont_impares++;
    }
    if(es_primo($valor)){
        $cont_primos++;
    }
}
//Escribe los contadores
escribe("Contador Pares : $cont_pares");
escribe("Contador Impares : $cont_pares");
escribe("Contador Primos : $cont_primos");





?>