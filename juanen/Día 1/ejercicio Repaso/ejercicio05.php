<?php
include('./../tools/mis_funciones.php');
/**5. Copie el ejercicio 4 y modiquelo para que el 
programa diga si dicho número es negativo, positivo o
cero.
 */
$n_aleatorio = 0;
escribe($n_aleatorio);
if($n_aleatorio < 0){
    escribe("Es negativo");
} else{
    if($n_aleatorio > 0){
        escribe("Es positivo");
    }
    if($n_aleatorio == 0){
        escribe("Es 0");
    }
}

// //Otra Forma
// if(($n_aleatorio - $n_aleatorio) <> 0){
    
// }






?>
