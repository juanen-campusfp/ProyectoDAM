<?php
/*Dados 5 números, decir cual de ellos es
    el menor.
*/
$numero1 = 8;
print ("Primer número: $numero1 <br> ");
$numero2 = 4;
print ("Segundo número: $numero2<br> ");
$numero3 = 10;
print ("Tercero número: $numero3<br> ");
$numero4 = 3;
print ("Cuarto número: $numero4 <br> ");
$numero5 = 9;
print ("Quinto número: $numero5 <br> ");
//Forma de decir cual es el menor   
if($numero1 > $numero2){
     if($numero1 > $numero3){
          if($numero1 > $numero4){
              if($numero1 > $numero5){
                print ("El primero es el más grande");
              }
          }
     }
}
if($numero2 > $numero1){
    if($numero2 > $numero3){
         if($numero2 > $numero4){
             if($numero2 > $numero5){
               print ("El segundo es el más grande");
             }
         }
    }
}
if($numero3 > $numero1){
    if($numero3 > $numero2){
         if($numero3 > $numero4){
             if($numero3 > $numero5){
               print ("El tercero es el más grande");
             }
         }
    }
}
if($numero4 > $numero1){
    if($numero4 > $numero2){
         if($numero4 > $numero3){
             if($numero4 > $numero5){
               print ("El cuarto es el más grande");
             }
         }
    }
}
if($numero5 > $numero1){
    if($numero5 > $numero2){
         if($numero5 > $numero3){
             if($numero5 > $numero4){
               print ("El quinto es el más grande");
             }
         }
    }
}


//ejercicio que no se repita y en está hacela con una función












?>