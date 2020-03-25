<?php
/* Copie la solución del ejercicio 1
   y modifique las notas, generándolas
   aleatoriamente. Su valor debe estar
   comprendido: 0 de a 10
*/

$nota1 = rand(0,1000) /100;
$nota2 = rand(0,1000) /100;
$nota3 = rand(0,1000) /100;
$nota4 = rand(0,1000) /100;

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