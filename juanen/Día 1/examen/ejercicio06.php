<?php
include('./../tools/mis_funciones.php');
//Formulario que solicite dia,mes y año . y diga si la feha es correcta
print("<form action='ejercicio06.php' method='post'>
<p>día: <input type='text' name='dia' /></p>
<p>mes: <input type='text' name='mes' /></p>
<p>año: <input type='text' name='año' /></p>
<p><input type='submit' /></p>
</form> ");
//Variables
$dia = $_POST['dia'];
$mes =$_POST['mes'];
$año =$_POST['año'];

if($dia >=1 && $dia<= 31){
if($mes == 2  && $dia > 28  ){
    escribe("el día esta mal ya que es febrero");
}else {
    escribe("esta bien el dia <br>");
}
}
if($mes >=1 && $mes<=12){
    escribe("El mes está bien <br>");
}
if($año >= 1900 && $año <=2900){
    escribe("El año está bien <br>");
}













?>