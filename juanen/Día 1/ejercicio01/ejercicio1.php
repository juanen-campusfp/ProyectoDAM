<?php
    /*
1) Haga un programa que dadas
   4 notas, calcule la media y
   la muestre por pantalla.

    $nota1 = 5;
    $nota2 = 3.5;
    etc.

Importante: La nota mostrada debe
        debe tener dos decimales.

   Debe mostrar dos resultados, el  
   primero truncando desde  el tercer decimal, 
   el segundo redondeando a dos decimales.
    */

    $nota1 = 5;
    $nota2 = 7;
    $nota3 = 9.5;
    $nota4 = 10;

    $notaFinal = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    print ("NOTA natural : $notaFinal <br>");
    //Truncado
    $notaTruncada = $notaFinal *100;
    $notaTruncada = (int)$notaTruncada;
    $notaTruncada = $notaTruncada *0.01;
    print("NOTA TRUNCADA : $notaTruncada <br>");
    //Redondeada a dos decimales
    $notaRedondeada = round($notaFinal,2);
    print("NOTA REDONDEADA : $notaRedondeada");










?>