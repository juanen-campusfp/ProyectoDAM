<?php
include('./../tools/mis_funciones.php');
//Formulario que solicite dos numeros distintos y digan si son diferentes
print("<form action='ejercicio03.php' method='post'>
<p>Número 1: <input type='text' name='numero1' /></p>
<p>Número 2: <input type='text' name='numero2' /></p>
<p><input type='submit' /></p>
</form> ");
//Variables
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
//Comprobar si son distintos;
if($numero1 <> $numero2){
    escribe("Son diferentes");
}
if($numero1 > $numero2){
    escribe($numero1 ." Es mayor");
} if($numero1 === $numero2){

}
else {
    escribe ($numero2 . " Es mayor");
}





?>