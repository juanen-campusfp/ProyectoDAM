<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
include('./tools/mis_funciones.php');
/* /*Ejercicio - prueba para mi 
Escriba un programa dado un texto
indique 
a)Cuántas vocales tiene
b)Cuántas consonantes tiene
c)Cuantos espacios tiene
d)Cuantas vocales A,E,I,O y U.

NOTA : Si el texto tiene espacios por los costados, elimínelos

*/


$texto = 'Tres tristes tigres comian trigo en un trigal';
$texto = strtolower($texto);
//

$array_texto = str_split($texto);
escribe_array($array_texto);

$contador_vocales = 0;
$contador_consonantes = 0;

$letras_vocales = "AEIOU";

//Función para contar lo hay dentro de una variable o texto
    escribe(substr_count($texto, 'a'));
    escribe(sjuanen($letras_vocales,$texto));
    




?>
</body>
</html>