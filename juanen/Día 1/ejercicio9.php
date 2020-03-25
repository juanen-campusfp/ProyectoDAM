<?php
include ('./tools/mis_funciones.php');
//Generare dos números aleatorios

$A = rand(1,100);
print("A : $A <br>");
$B = rand(1,100);
print("B : $B <br>");
$C= rand(1,100);
print("C : $C <br>");
$mayor = $A;

//Investigación
if($mayor < $B){
    $mayor = $B;
}
if($mayor < $C){
    $mayor = $C;
}
escribe ("El valor mayor es lo que hay : $mayor");
escribe('The END');


?>