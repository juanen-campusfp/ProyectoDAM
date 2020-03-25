<?php
/*Dados 3 números, decir cual de ellos es
el menor.
*/
//Números
$numero1 = 8;
print ("Primer número: $numero1 <br> ");
$numero2 = 1;
print ("Primer número: $numero2<br> ");
$numero3 = 7;
print ("Primer número: $numero3<br> ");
//Forma de decir cual es el menor
if($numero1 < $numero2){
     if($numero1 < $numero3){
          print ("El primero es el más pequeño");
     }
}
if($numero2 < $numero1){
     if($numero2 < $numero3){
          print ("El segundo es el más pequeño");
     }
}
if($numero3 < $numero1){
     if($numero3 < $numero2){
          print ("El tercero es el más pequeño");
     }
}




?>
