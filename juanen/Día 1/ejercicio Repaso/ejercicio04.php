<?php
include('./../tools/mis_funciones.php');
/**Genere un número aleatorio entre mil y menos mil 
e indique si dicho número generado es negativo.
 * 
 */

$n_aleatorio = rand(-1000,1000);
escribe($n_aleatorio);
if($n_aleatorio < 0){
    escribe("Es negativo");
}
//Otra Forma
if(($n_aleatorio - $n_aleatorio) <> 0){
    
}





?>