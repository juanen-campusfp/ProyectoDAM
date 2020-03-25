<?php

$numero1=rand(0,999);
print("Número 1: $numero1 <br>");
$numero2=rand(0,999);
print("Número 2: $numero2 <br>");
if($numero1 < $numero2){
    print("El primero : $numero1 es menor a ... $numero2");
} if ($numero2 < $numero1){
    print("El segundo : $numero2 es menor a ... $numero1");
}






?>