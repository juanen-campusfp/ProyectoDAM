<?php
include('./../tools/mis_funciones.php');
//Formulario para introducir datos (un número) desde un formulario
print("<form action='ejercicio01.php' method='post'>
<p>Número: <input type='text' name='numero' /></p>
<p><input type='submit' /></p>
</form> ");
if( isset( $_POST["numero"] )  ){
    $numero = (int)$_POST["numero"];

    escribe($numero);
    //Función para saber si es par o no
    if(es_par($numero)) escribe("Es par : $numero");
    if(es_impar($numero)) escribe("Es impar : $numero");

}




?>