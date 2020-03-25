<?php
include('./../tools/mis_funciones.php');
/**1. Leer un número entero y determinar si es un número 
terminado en 4. 
Si lo es debe escribir "Fini 4" y si no lo es, debe 
escribir "UNFini 4"
 * 
 */
$n = rand(0,999);
$n = (string)$n;
escribe($n);
if(substr($n,-1) == '4'){
    escribe("Fini 4");
}


?>