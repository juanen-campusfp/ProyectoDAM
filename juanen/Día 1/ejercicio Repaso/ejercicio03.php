<?php
include('./../tools/mis_funciones.php');
/**
 * 3. Copie el programa 2 y modiquelo para que el número 
que investiga sea generado aleatoriamente entre valores
a partir de 1 hasta 1000000 ( un  y un millón)
 */

 $n = rand(1,1000000);
 
 $num_digitos = contar($n);
escribe( $n . " >> " , false );
escribe( $num_digitos );





?>