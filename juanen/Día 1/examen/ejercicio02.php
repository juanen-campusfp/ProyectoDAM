<?php
include('./../tools/mis_funciones.php');
//Formulario que solicite dos numeros enteros y digan si son iguales o no
print("<form action='ejercicio02.php' method='post'>
<p>Número 1: <input type='text' name='numero1' /></p>
<p>Número 2: <input type='text' name='numero2' /></p>
<p><input type='submit' /></p>
</form> ");
//Variables
$numero1 = (int)$_POST['numero1'];
$numero2 = (int)$_POST['numero2'];
//Comprobar si son iguales o no;
if($numero1 === $numero2){
    escribe("Son iguales ");
} else {
    escribe("Son distintos");
}




?>