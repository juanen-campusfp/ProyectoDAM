<?php
include('./../tools/mis_funciones.php');
/**
 * /*
 * 8. Genere dos números aleatorios entre 1 y 5000 y diga
si la suma suma de estos dos números enteros 
genera un número par.*/
 
$numero1 = rand(1,5000);
$numero2 = rand(1,5000);
escribe ("Numero 1 ==> $numero1");
escribe ("Numero 2 ==> $numero2");
$suma = $numero1 + $numero2;
if(es_par($suma)){
    escribe("El numero $suma ==> PAR");
} else if(es_impar($suma)){
    escribe("El número $suma ==> IMPAR");
}

?>