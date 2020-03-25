<?php
include('./../tools/mis_funciones.php');

//un null es un mécanismo que me permite ahorar datos , en memoria.

/*
    En general un array es una estructura en
    memoria que puede ser entendida de la siguiente
    forma:
        array(
            clave    =>   valor,
            clave2   =>   valor2,
            clave3   =>   valor3,
            ...
        );

    Se puede construir mediante un función
    "constructora" que se llama array()
    
    Ejemplo:
    
    $datos = array(); 
    Es un array vacío, nada contiene.
    
    Declaración de array basada en clave (key)
    Trukos: 
        Una clave puede ser un texto o un valor
        numérico y el valor al cual dicha clave
        identifica puede ser de cualquier tipo.
    Ejemplo:
*/
$mis_datos = 
    array(
        1   => 'Buenos días'            ,
        "1" => '¿Cómo están Ustedes?'   ,
        2.5 => 2020                     ,
        true=> false
    );
escribe_array($mis_datos,2);
/**Se optiene al ejecutar esto:
 * array(2) {
                [1]=>
                bool(false)
                [2]=>
                int(2020)
}
 * Es una carácteristica en PHP
 * En PHP las keys  1,"1" y true  valen (1)
 * por lo tanto, desde la visión PHPera la definición
 * del array es :
 * $mis_datos = 
    array(
        1   => 'Buenos días'            ,
        1 => '¿Cómo están Ustedes?'   ,
        2.5 => 2020                     ,
        1=> false
    );

Cuando la key es un valor decimal, dicho valor php lo trunca dejando solo su valor entero.
Finalmente el array desde la visión PHPera queda así:
$mis_datos = 
    array(
        1   => 'Buenos días'            ,
        1 => '¿Cómo están Ustedes?'   ,
        2 => 2020                     ,
        1=> false
    );


$mis_datos = 
    array(
        1   => 'Buenos días'            ,
        "1" => '¿Cómo están Ustedes?'   ,
        1 => 2020                     ,
        true=> false
    );




 */
escribe_array($mis_datos,2);
foreach($mis_datos as $clave => $valor){
    escribe($clave . ">>>>>>>>>>>>>" . $valor);
}
//Si es necesario,puedo apoyarme en 
//el valor 0 de false o 1 de true
// para hacer operaciones aritméticas.
$valor = 10 + 1000*$mis_datos[1];

/**En PHP se admite la convivencia entre claves (keys) de tipo numérico y de tipo texto 
 */
$mis_datos2 = 
    array(
        'saludo' =>'Buenos días',
        -110 => 'Cien',
        -100 => -100
    );
escribe_array($mis_datos2);

/** Voy a añadir un nuevo elemento a un array  */
$mis_datos2[] = 'Soy el último';
escribe_array ($mis_datos2);

/**
 PHP admite crear elementos en posiciones númericas diferentes a las "naturales"
 Es decir, si tengo ya creadas con clave humana o clave numeral, puedo hacer cosas así:
 $mi_array[10] = "hola";
 */
$mis_datos2[5] = 'Soy un nuevo valor';
escribe_array ($mis_datos2);

/**
Los nuevos elementos creados pueden tener clave NO numérica
    $mis_datos3 = []; La nomenclatura[]
    Pertenece a PHP7, se recomienda usarla.

    Por lo tanto:
    $mi_array = array();//php3,4,5,6
    $mi_array = [];//php7



 */
$mis_datos3 = [
    'hola' => 'adios',
    'adios' => 'hola',
    'HOLA' => 'ADIOS',
    'ADIOS' => 'HOLA'
];
escribe_array ($mis_datos3);
//Un array puede almacenar otro array
$todos_los_datos = 
[
    'array_1' => $mis_datos ,
    'array_2' => $mis_datos2,
    'array_3' => $mis_datos3,
    'array_4' => 'hola'
];
escribe_array($todos_los_datos); 
//Recorreré el array completo
foreach($todos_los_datos as $clave => $valor){
    escribe($clave);
    escribe_array($valor);
}
/**
 Cuidado con esto:
 $un_array = [
    'hola' => 'Buenos días';
    'Hola' => 'Buenos días';
 ];
 */
$un_array = [
    'hola' => 'Buenos días',
    'Hola' => 'ke pashaaa'
 ];
 escribe_array($un_array);
//No hacer desaparecer la variable,pero si su contenido
escribe('Hago null a la variable');
$un_array = null;//Vacía su contenido
escribe_array($un_array);


//Limpiar la memora quitando algo que yo guardé ahí: unset()

unset($un_array); //Quita de la memoria la variable  $un_array 
                //eliminando además todo lo que ella apunta.
escribe_array($un_array);


//declarar un array sin contendio
escribe('Array Alberto');
$a_alberto = [];
escribe_array($a_alberto);


$a_alberto[] = 'Hola';
escribe_array($a_alberto);

$a_alberto = null;
//Reutilizare 
$a_alberto = [];
escribe_array($a_alberto);
$a_alberto[] = '¿Buenos días?';
$a_alberto[] = 'Bien';
escribe_array($a_alberto);
?>