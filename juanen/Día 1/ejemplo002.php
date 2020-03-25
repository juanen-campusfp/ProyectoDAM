<?php
function escribe ($algo,$salta=true){
	print($algo);
	if($salta == true){
		print('<br>');
	}
	
}
escribe('<strong>' );
escribe('Operadores' );
escribe('</strong>' );
escribe('<hr>' );
escribe('Aritméticos' );
escribe('Suma + '.'resta - '.'Multiplicación * '.'División / ' );
escribe('Resto de la división %' );
$resto = 17 % 3;
escribe("El resto es: $resto" ); 


//Ejercicio de Ejemplo
/*Haga un contador que cuenta desde 1 hasta 50 y que muestre cada valor por pantalla*/
escribe('<br>' );
for($contador=1;$contador <=50;$contador++){
	escribe($contador, false);
	$asterisco = '&nbsp';
	if($contador % 10 == 3){
		$asterico = '*';
	}
	//Averigua si es par o impar
	if($contador % 2 == 0){
		escribe(' PAR' );
	} else {
		escribe(' IMPAR' . $asterico );
	}
  
	
	escribe('<br>');
}
//EJERCICIO DE DECIR LOS NÚMEROS QUE ACABEN EN 3, 3, 13, 23,33,43

?>