<?php
include('./../tools/mis_funciones.php');
//Formulario que indique cuántas cifras tiene un número entero , comprendido 0 y 99999
print("<form action='ejercicio09.php' method='post'>
<p>Número del 0 al 99999 : <input type='text' name='numero' /></p>
<p><input type='submit' /></p>
</form> ");

$numero = (int)$_POST['numero'];
//Función para contar
$contador = contar($numero);
 //Escribir el contador
 escribe($contador);

?>