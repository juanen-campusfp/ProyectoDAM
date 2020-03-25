<?php
//Las importanciones es lo primero que va
include ('./tools/mis_funciones.php');
$num_1= rand(-100,100);
$num_2 = rand(-100,100);

//Investogaré si el divisor es 0
//Si lo es, no puedo y lo diré
// Si no lo es, investigaré si su división es exacta lo es lo diré
//y si no lo es (me refiero a ser división exacta) también lo diré
if($num_2 == 0){
    escribe('Divisor cero, no se puede dividir');
} else {
    // Se puede dividir ya que el divisor
    //No es cero.
    //Nesting (Anidamiento de estructuras)
    if($num_1 % $num_2 == 0){
        escribe(' División exacta');
    } else {
        escribe(' División  no exacta');
    }
    escribe('Primer valor = '. $num_1);
    escribe("Segundo  valor = $num_2");

}
escribe('FIN');

?>