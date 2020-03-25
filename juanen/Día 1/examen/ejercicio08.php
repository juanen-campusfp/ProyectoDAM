<?php
include('./../tools/mis_funciones.php');
//Formulario que introduzca un número entre 0 y 9999 , para que indique si es cápicúa o no
print("<form action='ejercicio08.php' method='post'>
<p>Número del 0 al 9999 : <input type='text' name='numero' /></p>
<p><input type='submit' /></p>
</form> ");
$numero = (int)$_POST['numero'];
$numero2 = 11;
//Comprobación si es cápicua
if($numero % $numero2 == 0){
    escribe("Es capicua");
} else{
    escribe("No es capicua");
}







?>