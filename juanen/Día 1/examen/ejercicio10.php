<?php
include('./../tools/mis_funciones.php');
//Formulario que indique cuántas cifras tiene un número entero , comprendido 0 y 99999
print("<form action='ejercicio10.php' method='post'>
<h1>Coeficientes de una Ecuación de segundo grado :</h1>
<p>a : <input type='text' name='a' /></p>
<p>b : <input type='text' name='b' /></p>
<p>c : <input type='text' name='c' /></p>
<p><input type='submit' /></p>
</form> ");
//Ecuación ax2 + bx + c = 0
//Variables
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
//Varible formula

if($a <= 0  || $b == null || $c == null) escribe("No es una ecuación cuadrática");
if($a > 0){
    $formula_suma = ((-$b) + sqrt(pow(($b),2)-(4*$a*$c)))/(2*$a);
    $formula_resta = ((-$b) - sqrt(pow(($b),2)-(4*$a*$c)))/(2*$a);
    escribe("SUMA SOLUCIÓN 1 : $formula_suma");
    escribe("RESTA SOLUCIÓN 2 : $formula_resta");
}




?>