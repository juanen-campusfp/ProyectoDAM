<?php
include ('./tools/mis_funciones.php');
//Array Teoria
//Es una estructura con nombre  que permite contener múltiple datos
//Se puede acceder a cada uno de estos datos, mediante su posicción dentro de la estructura 
// o Mediante un nombre, que en el futuro , llamaremos la clave (key)

//Cómo declarar un array

$datos = array('Juanen', 'España',14,19);
//Mostrar un array:
//Forma 1:
print('<pre>');
var_dump($datos);
print('</pre>');
//Línea hr con función
trazalinea();
escribe_array($datos,2);
//Forma 2
escribe('<pre>');
print_r($datos);
escribe('<pre>');
//Función con 1 por defecto
escribe_array($datos);
/*
    Añadir nuevos elementos a un array.
*/
$datos[] = 2020;
$datos[] = 'CampusFP';
$datos[]= 'Getafe';
escribe_array($datos);


// Cuantos elementos tiene un array
$num_elementos = count($datos);
escribe("Datos tiene $num_elementos elementos",true);
// 2 Formas Recorrer un array
//1  Forma Tradicional 
for($i = 0;$i < $num_elementos;$i++){
    escribe("
    $datos[$i] está en  posición $i");
}

//2  Forma PHPera
//Definición : Me olvido de los límites de los array,
//me olvido de donde empieza u donde acaba 
// ya que está estructura recorre el
// array de manera automágica desde el 
// princioio hasta el final.

//Se lee asi:
// Para cada valor de la estructura $datos
//me vas a coger su "clave"(key) y su
// "valor asociado"
foreach( $datos as $clave => $valor){
escribe( $valor );
}

//Ejercicios

//Investigar ¿Que debo yo hacer apartir de un texto crearme un texto, donde cada una de las letras van a ir a parar a un cajon del armario
//Es decir convertir un texto en array

//Ejercicio 1: Ejercicio dar un texto y saber cuantas letras tiene
print('<br>');
$texto = 'Locura';
$textos = str_split($texto);
foreach($textos as $clave => $valor){
    escribe($valor);
}
//Hacer Función Traza Línea
trazalinea();

/*Ejercicio - prueba para mi 
Escriba un programa dado un texto
indique 
a)Cuántas vocales tiene
b)Cuántas consonantes tiene
c)Cuantos espacios tiene
d)Cuantas vocales A,E,I,O y U.

NOTA : Si el texto tiene espacios por los costados, elimínelos

*/
//Ejercicio a)

$vocales = array('a','e','i','o','u');
$contador_Vocal = 0;
$texto_A = 'juanen';
$textos_A = str_split($texto_A);

foreach($textos_A as $clave => $valor){
   if(in_array($valor,$vocales)){
    $contador_Vocal = $contador_Vocal + 1 ; 
   }
}
escribe("El número de vocales son : $contador_Vocal");


//Ejercicio b)
$texto_B = strtolower("UMPALUMPA");
$textos_B = str_split($texto_B);
$consonante = strtolower("BCDFGHJKLMÑPQRSTVWXYZ");
$consonantes = str_split($consonante);
$contador_Consonante = 0;

foreach($textos_B as $clave => $valor){
    if(in_array($valor,$consonantes)){
        $contador_Consonante = $contador_Consonante + 1;

    }

}
escribe ("El número de consonantes es : $contador_Consonante");


//Ejercicio c

trazalinea();
$texto_C = "juan enrique";
$textos_C = str_split($texto_C);
$contador_Espacio = 0;



foreach($textos_C as $clave => $valor){
    if ($valor == " "){
        $contador_Espacio = $contador_Espacio + 1 ;
    }
}
escribe($contador_Espacio);
//ejercicio d

$vocales = array('A','E','I','O','U');
$contador_Vocal = 0;
$texto_A = 'juanen';
$textos_A = str_split($texto_A);

foreach($textos_A as $clave => $valor){
   if(in_array($valor,$vocales)){
    $contador_Vocal = $contador_Vocal + 1 ; 
   }
}
escribe($contador_Vocal);

//ejercicio extra (NOTA : Si el texto tiene espacios por los costados, elimínelos)

$letras = "abcdefghijklmnñopqrstuvwxyz";
$texto_extra = " juanen ";
$textos_extra = str_split($texto_extra);
foreach($textos_extra as $clave => $valor){

}


?>