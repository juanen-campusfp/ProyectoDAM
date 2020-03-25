<!-- 7) Haga un programa que reciba dos números
   y que diga si la división de estos dos
   números es exacta or no. -->
<?php

$numero1= rand(1,999);
$numero2 =5;

print("<b>Número 1: </b>". $numero1."<br>");
print("<b>Número 2: </b>". $numero2."<br>");

if($numero1 % $numero2 == 0 ){
    print("Exacto");
} else {
    print("NO es exacto");

}





?>