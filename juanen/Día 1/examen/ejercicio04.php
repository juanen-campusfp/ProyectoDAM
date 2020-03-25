<?php
include('./../tools/mis_funciones.php');
//Formulario que solicite 10 números
print("<form action='ejercicio04.php' method='post'>
<p>Número 1: <input type='text' name='numero1' /></p>
<p>Número 2: <input type='text' name='numero2' /></p>
<p>Número 3: <input type='text' name='numero3' /></p>
<p>Número 4: <input type='text' name='numero4' /></p>
<p>Número 5: <input type='text' name='numero5' /></p>
<p>Número 6: <input type='text' name='numero6' /></p>
<p>Número 7: <input type='text' name='numero7' /></p>
<p>Número 8: <input type='text' name='numero8' /></p>
<p>Número 9: <input type='text' name='numero9' /></p>
<p>Número 10: <input type='text' name='numero10' /></p>
<p><input type='submit' /></p>
</form> ");

$numeros = array();
for($i = 1;$i <=10;$i++){
$numeros [] = $_POST["numero$i"];
}
//Funcion para escribir de mayor a menor
arsort($numeros);
//Escribir array
escribe_array($numeros);








?>