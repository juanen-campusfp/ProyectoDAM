<?php
include ('./tools/mis_funciones.php');
$numero1=rand(-999,999);
print("Número 1: $numero1 <br>");
$numero2=rand(-999,999);
print("Número 2: $numero2 <br>");

if ($numero1 > $numero2){
    escribe ("El primero : $numero1 es mayor a ... $numero2");
} else {
    escribe ("El segundo : $numero2 es mayor a ... $numero1");
}
escribe ('The END');





?>