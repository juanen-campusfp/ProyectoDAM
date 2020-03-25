<?php
include('./../tools/mis_funciones.php');
//Formulario que solicite un número comprendido entre 1 y 99
print("<form action='ejercicio05.php' method='post'>
<p>Número entre 1 y 99: <input type='text' name='numero' /></p>
<p><input type='submit' /></p>
</form> ");
//Filtro de datos para cojer un número entre 1 y 99
if($_POST['numero'] >= 1 && $_POST['numero'] <=99){
    $numero = $_POST['numero'];
}else{
    escribe("Es estre 1 y 99");
}
//
//Diferentes
//10,11,12,13,14,15,16,17,18,19,20
//

$valor = decenas($numero);
escribe($valor);










?>