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
$nota2 = 3.5;
$nota3 = 6.25;
$nota4 = 7;

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
print( 'The End' );
?>