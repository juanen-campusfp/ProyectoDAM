<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
/*
Ejercicio
Escriba un programa dado un texto indique 

a)Cuántas vocales tiene
b)Cuántas consonantes tiene
c)Cuantos espacios tiene
d)Cuantas vocales A,E,I,O y U.

NOTA : Si el texto tiene espacios por los costados, elimínelos
*/

include( './tools/mis_funciones.php' );

$texto = 'Tres tristes tigres, comian trigo en un trigal';

// Convierto todo el texto en minúsculas
$texto = strtolower( $texto );

// Convierte el texto en Arrayy y en ese
// array se guarda una letra por posición
$array_texto = str_split( $texto );
//escribe_array( $array_texto );

// Defino e inicializo con valor cero
// las variables que se encargarán de contar
// lo que yo deseo contar.
$cont_voca = 0; // Contador de todas las vocales
$cont_cons = 0; // Contador de las consonantes
$cont_a = 0;
$cont_e = 0;
$cont_i = 0;
$cont_o = 0;
$cont_u = 0;
$cont_b = 0; // Contador de espacios en blanco

// Nota para los navegantes: 
// Una a o á cuenta ambas como  a

foreach( $array_texto as $clave => $valor ){
    // Busco las vocales de manera separada
    if( es_a( $valor ) == true ) {
        $cont_a++;
    }
    if( es_e( $valor ) ) { $cont_e++; }
    if( es_i( $valor ) )   $cont_i++; 
    if( es_o( $valor ) )   $cont_o++; 
    if( es_u( $valor ) )   $cont_u++; 
    // Ahora investigaré lo del espacio
    if( es_b( $valor ) ) $cont_b++; 
    // Contaremos consonantes
    if( es_consonante( $valor ) ) $cont_cons++;
}
// Ya he salido del bucle foreach, y tengo
// ya contadas las vocales de manera separada
$cont_voca = $cont_a + $cont_e + $cont_i +
             $cont_o + $cont_u;

escribe( "A ..... = $cont_a" );
escribe( "E ..... = $cont_e" );
escribe( "I ..... = $cont_i" );
escribe( "O ..... = $cont_o" );
escribe( "U ..... = $cont_u" );
escribe( "blancos = $cont_b" );
escribe( "Vocales = $cont_voca" );
escribe( "Consona = $cont_cons" );
escribe( 'The End' );
?>
</body>
</html>
