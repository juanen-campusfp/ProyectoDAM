<?php
include('./../tools/mis_funciones.php');
/**
 *Ejercicio 18
Haga un programa que genere números capicuas
aleatorios.
Cada capicua generado debe ser guardado en un
array.
Sólo se aceptarán capicuas de 3 o 5 dígitos
Debe almacenar en un array los 50 primeros
capicuas generados de 3 o 5 dígitos
Una vez generados, debe finalizar de generar
números¡
 */

// Par 11 

//Capicuas de 3 o 5
$a_capicua3 = array();
for($i = 0 ; $i < 50;$i++){
    $n = rand(101,999);
    $n1 = rand(10001,99999);
    escribe($n). "<br>";
    escribe(substr($n,0,1));
    escribe(substr($n,-1,));
    

    if(substr($n,0,1) == substr($n,-1)){
        escribe("Capicua");
        $a_capicua3 [] = $n;
    }

}


escribe("hola");
escribe_array($a_capicua3);









?>