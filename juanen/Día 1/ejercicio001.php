<!-- Haga un programa dadas 4 notas, calcule la media y la muestre por pantalla. -->
<!-- Importante la nota mostrada debe tener dos decimales -->
<!-- 2 Formas: 1º El primero truncado desde el tercer decimal. Y 2º DEbe ser redondeado a dos decimales. -->
<!-- 2) Copie la solución del ejercicio1 y modifique las notas,generandolas aleatoriamente.Su valor debe estar comprendido:0 de a 10 -->
<?php
$nota1 = 5;
$nota2 = 6.5;
$nota3 = 7;
$nota4 = 8;
//Cálculo de Medias
$notaMedia= ($nota1 + $nota2 + $nota3 + $nota4) / 4;
//Método de Cálculo 1 
$notaMediaT = 100 *$notaMedia;
$notaMediaT = (int)$notaMediaT;
$notaMediaT = $notaMediaT * 0.01;
//Resultado de Media Truncada
print('Media Bruta: '. $notaMedia);
print("Media Truncada: $notaMediaT");
$notaMediaR = round($notaMedia);
print("<br>");
 //Ejercicio 2.
 $nota1_1=rand(0,1000) / 100;
 $nota2_1=rand(0,1000) / 100;
 $nota3_1=rand(0,1000) / 100;
 $nota4_1=rand(0,1000) / 100;

$notaMedia_1=($nota1 + $nota2_1 + $nota3_1 + $nota4_1) / 4;
$notaRedondeadaTres_1 = round($notaMedia_1,3);
$notaRedondeadaDos_1= round($notaMedia_1,2);
print($notaMedia_1);
print('<br>');
print("Tres Decimales: $notaRedondeadaTres_1");
print('<br>');
print("Dos Decimales: $notaRedondeadaDos_1");

//Ejercicio 3 Pulgadas
$pulgadas = 14;
$resultado = $pulgadas * 2.54;




?>