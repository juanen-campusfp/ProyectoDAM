<?php
/* Ejercicio 17  */
include( './../tools/mis_funciones.php' );

$cont_primos = 0;
$a_primos = Array();
$cont_N_aleat = 0;
$sum_primos = 0;

$a_cont_primos = Array();

while( true ){
    $num_aleatorio = rand( 1 , 1000 );
    $cont_N_aleat++;
    if( es_primo( $num_aleatorio ) ) {
        $cont_primos++;
        $a_primos[] = $num_aleatorio;
        $sum_primos += $num_aleatorio;
        $a_cont_primos[ $num_aleatorio ] = '*';
    }
    if( $cont_primos == 50 ) break;
}
escribe_array( $a_primos );
escribe( "Numeros Genera2 = $cont_N_aleat" );
escribe( "Suma de Primos = $sum_primos" );
escribe( 'The End' );

escribe_array(arsort($a_cont_primos)  );
escribe(count( $a_cont_primos ) );

?>