
<?php
/* escribe( lo que voy a escribir,
 *          true para que salte línea
 *          o false para que no salte )
 */
function escribe( $algo , $salta=true ){
    print( $algo );
    if( $salta == true ){
        print( '<br>' );
    }
}

/* escribe_array( $un_array )
 * Esta función muestra de una
 * manera ordenada el contenido de un array
 * indicando sus  "key"  asociados
 */
function escribe_array( $un_array , $forma=1 ){
    escribe( '<pre>'  , false );
    if( $forma == 1 ) {
        print_r( $un_array );
    } else {
        var_dump( $un_array );
    }
    escribe( '</pre>' , false );
}

function traza_linea(){
    escribe( '<hr>', false );
}

function es_consonante( $letra ){
    // Prejuicio
    $respuesta = true;
    $conso = 'BCDFGHJKLMNÑPQRSTVWXYZ';
    $conso = $conso 
             . strtolower( $conso );
    if( strpos( $conso, $letra ) === false ) {
        $respuesta = false;
    }
    return $respuesta;
}

// es_a ( letra )
// Se trata de averiguar si "letra" es
// una  a  , á, A o Á 
// ****************************************
// Toda función que empieza por
// es_   esta_   is_   generalmente
// devuelven un valor "boolean"
// ****************************************
// Devolverá  true  si es una a 
//            false si NO lo es
function es_a( $letra ){
    // Prejuicio
    $respuesta = false;
    if( $letra == 'A'  ||
        $letra == 'a'  ||
        $letra == 'Á'  ||
        $letra == 'á' ) {
        $respuesta = true;
    }
    return $respuesta;
}

function es_e( $letra ){
    // Prejuicio
    $respuesta = false;
    if( $letra == 'E'  ||
        $letra == 'e'  ||
        $letra == 'É'  ||
        $letra == 'é' ) {
        $respuesta = true;
    }
    return $respuesta;
}

function es_i( $letra ){
    // Prejuicio
    $respuesta = false;
    if( $letra == 'I'  ||
        $letra == 'i'  ||
        $letra == 'í'  ||
        $letra == 'Í' ) {
        $respuesta = true;
    }
    return $respuesta;
}

function es_o( $letra ){
    // Prejuicio
    $respuesta = false;
    if( $letra == 'O'  ||
        $letra == 'o'  ||
        $letra == 'Ó'  ||
        $letra == 'ó' ) {
        $respuesta = true;
    }
    return $respuesta;
}

function es_u( $letra ){
    // Prejuicio
    $respuesta = false;
    if( $letra == 'U'   ||
        $letra == 'u'   ||
        $letra == 'Ú'   ||
        $letra == 'ú'   ||
        $letra == 'Ü'   ||
        $letra == 'ü' ) {
        $respuesta = true;
    }
    return $respuesta;
}

function es_b( $letra ){
    // Prejuicio
    $respuesta = false;
    if( $letra == ' ' ) {
        $respuesta = true;
    }
    return $respuesta;
}


/* es_par($n)
*Funcion para saber si un número es impar
*/
function es_par($n){
    //Prejuicio
    $respuesta = false;
    if($n % 2 == 0){
        $respuesta = true;
    }
    return $respuesta;
}
/**es_impar($n)
 * Función para saber si un número es impar 
 */
function es_impar($n){
    //Contrario de par
 return !es_par($n);
}

/**es_primo($n)
 *  * Función que determina si un numero es primo
  * Tiene que recibir el numero a determinar si es primo o no
  * Devuelve True o False
  */
function es_primo( $num ) {
    if( $num == 0 ) return false;
    $cont=0;
    // Funcion que recorre todos los numero desde 
    // el 2 hasta el valor recibido
    for( $i=2; $i<=$num ; $i++ ) {
        if( $num%$i==0 ) {
            // Sí se puede dividir por algún 
            // número más de una vez, no es primo
            if(++$cont > 1 ) return false;
        }
    }
    //escribe( "$num es primo" );
    return true;
}
/**contar($numero)
 * Contar cuantas cifras tiene un número entero
 * 
 * 
 * 
 */

 function contar($numero){
     //Perjuicio
    $contador = 0;
     while($numero > 0){
        if($numero / 10 != 0) {
            $numero = (int)( $numero / 10 );
            $contador++;
        }else{
            $numero = 0;
        }

     }
     return $contador;
 }
 /*2 FUNCIONES PARA TRANSFORMAR 
 */
/**basico($numero)
 * Función para decir los numeros del 1 al 27 en texto;
 */
function basico($numero){
    $valor = array ('uno','dos','tres','cuatro','cinco','seis','siete','ocho',
    'nueve','diez', 'once','doce','trece','catorce','quince','diezseís','diezsiete','diezocho','dieznueve','veinte','veintiuno','veintidos','veintetres','veinticuatro','veinticinco',
    'veintiséis','veintisiete','veintiocho','veintinueve');
    return $valor[$numero - 1];
}
/**decenas($n)
 * Función para decir los números del 30 al 90 y que retorne la función basico($numero),
 * con los números del 1 al 29
 */
function decenas($n){
    $decenas = array (30=>'treinta',40=>'cuarenta',50=>'cincuenta',60=>'sesenta',
    70=>'setenta',80=>'ochenta',90=>'noventa');
    if( $n <= 29) return basico($n);
    $x = $n % 10;
    if ( $x == 0 ) {
    return $decenas[$n];
    }else return $decenas[$n - $x].' y '. basico($x);
}


/**sumar_digitos($numero)
 * Función para sumar todos los digitos de un número */
function sumar_digitos($numero){
    $suma = 0;
    while($numero >=10){
        $a_numero = array();
        $a_numero = str_split($numero);
        $suma = array_sum($a_numero);
        escribe($suma);
        $numero = $suma;
    }
    return ;
}
/** semiperimetro($a,$b,$c);
 * Calcular el semiperimetro de un triangulo
 */
function semiperimetro($a,$b,$c){
    $formula = ($a + $b + $c) / 2;
    return $formula;
}
/**a_triangulo($semiperimetro,$a,$b,$c)
 * Calcular la area de un triángulo (Fórmula Herón)
 * a fórmula de Herón halla el área de un triángulo del cual se conocen todos sus lados.
 *  El área se calcula a partir del semiperímetro del triángulo s y de la longitud de los lados (a, b y c).
 */
function a_triangulo($semiperimetro,$a,$b,$c){
$formula = sqrt($semiperimetro*($semiperimetro - $a)*($semiperimetro-$b)*($semiperimetro-$c));
return $formula;
}

/**a_cuadrado($lado1,$lado2)
 * Calcula la area de un cuadrado
 */
function a_cuadrado($lado1,$lado2){
    $formula = ($lado1 * $lado2);
    return $formula;
}

/**a_circulo($radio) 
 * Calcular la area de un circulo con el radio
*/
function a_circulo($radio){
    $formula = ( M_PI * sqrt($radio) );
    return $formula;
}
?>