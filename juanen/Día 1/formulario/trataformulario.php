<?php
include_once('../tools/mis_funciones.php');
escribe_array($_GET);
/*Los datos de un formulario, cuando
*viajan al servidor, SIEMPRE llegan
*en tipo texto.
*/

//Como atrapar los valores de manera
//individual
$nombre = $_GET['nombre'];
$correo = $_GET['correo'];
$telefono = $_GET['telefono'];
$fecha = $_GET['fecha'];
$check = $_GET['check'];
$lista = $_GET['ciudad'];
//Quitaré los espacios enblanco en los extremos
$nombre = trim($nombre);
$correo = trim($correo);
$telefono = trim($telefono);
$fecha = trim($fecha);
$array_datosF = array($nombre,$correo,$telefono,$fecha,$check,$lista);
// escribe_array($array_datosF);

$mensaje = "";
$asterisco = "";


//Validare el nombre,por que podría ser
// que solo sean espacios
if(strlen($nombre) < 2){
    //Longitud de nombre incorrecta
    $mensaje = "Longitud del nombre incorrecta";
    $asterisco = "*";
}
//Mensaje check
$mensaje_check = "";
$asterisco_check = "";
//Validare si check esta lleno
if(!isset($check)){
$mensaje_check = "La casilla no está marcada";
$asterisco_check = "*";
}
//Mensaje lista
if(!isset($lista)){
    $mensaje_lista = "La lista no está insertada, seleciona una";
    $asterisco_lista = "*";
    }

//Contruir la llamada para volver al formulario principal
$url = 'index.php?nombre='. $nombre. '&correo='.$correo.'&telefono='.$telefono.'&fecha='.$fecha . '&mensaje='.$mensaje .'&asterisco='.$asterisco . '&mensaje_check='.$mensaje_check.'&asterisco_check='.$asterisco_check. '&mensaje_lista='.$mensaje_lista.'&asterisco_lista='.$asterisco_lista;
escribe($url);
header('Location:'.$url);


?>

//incluir una base de datos en php
