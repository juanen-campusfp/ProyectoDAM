<?php
/*Haga un programa que reciba su fecha de nacimiento y calcule su edad.
Consejo:recoge la edad con los datos separados,$dia,$mes,$año.
Nota : Hay que investigar cómo  obtener la fecha actual.(fecha del sistema)
Tenga en cuenta el mes y día de celabración del cumpleaños para determinar la edad exacta.
*/
$dia = 15;
$mes = 01;
$año= 2003;
print('La fecha actual es: '. date("d"). '-'. date("m"). '-'.date("Y").' Minutos: '.date('i').' Segundos: '.date("s"));
$Raño=date('Y') - $año ;
if($mes >= date("m")){
    $Raño = $Raño - 1;
    if(date("m") == $mes and $dia == date("d")){
        $Raño = $Raño + 1;
    }
}

print('<br> Año : '. $Raño);





?>