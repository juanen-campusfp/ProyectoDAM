<?php
include('./../tools/mis_funciones.php');
//Formulario que solicite 10 números
print("<form action='ejercicio07.php' method='post'>
<p>Nota del 0 al 10 : <input type='text' name='nota' /></p>
<p><input type='submit' /></p>
</form> ");
$nota = (int)($_POST['nota']);


if($nota >= 0  && $nota < 5){
    escribe("Insuficiente");
}
if($nota >= 5 && $nota <=6){
    escribe("Suficiente");
}
if($nota >= 7 && $nota <9){
    escribe("Notable");
}
if($nota >= 9 && $nota <=10){
    escribe("Sobresaliente");
}






?>