<?php
/*
2) Copie la solución del ejercicio 1
   y modifique las notas, generándolas
   aleatoriamente. Su valor debe estar
   comprendido: 0 de a 10
*/

$nota1 = rand( 0 , 1000 )/100; // Aleatorio entre
$nota2 = rand( 0 , 1000 )/100; // 0 y 10.
$nota3 = rand( 0 , 1000 )/100;
$nota4 = rand( 0 , 1000 )/100;

$suma_notas = $nota1 + $nota2 + 
              $nota3 + $nota4;
$media = $suma_notas / 4;

print( 'Media Bruta ' .  $media );

// salto una línea
print( '<br>' );

// Truncaré la media para dejarla con solo
// dos decimales.

// Muevo la coma dos posiciones a la derecha
$mediaT = 100 * $media;

// Hago desaparecer todos los decimales
$mediaT = (int)$mediaT;

// Muevo la coma dos posiciones a la
// izquierda
$mediaT = $mediaT * 0.01;

// Muestro el resultado obtenido
print( 'Media Truncada ' .  $mediaT );

// salto una línea
print( '<br>' );

// Calcularé la media redondeando a dos
// decimales
$mediaR = round( $media, 2 );
// Muestro el resultado obtenido
print( 'Media Redondeada ' .  $mediaR );

// salto una línea
print( '<br>' );

// Mostraré las notas:

print( " 1 >> $nota1 <br>" );
print( " 1 >> $nota2 <br>" );
print( " 1 >> $nota3 <br>" );
print( " 1 >> $nota4 <br>" );




print( 'The End' );
?>