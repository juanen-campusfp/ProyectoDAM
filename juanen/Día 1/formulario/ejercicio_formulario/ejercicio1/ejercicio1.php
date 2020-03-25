<!-- 1. Teniendo dos input de type number, recogelos via post, sumalos y muestra el resultado. -->
<?php
$n1 = $_POST['numero1'];
$n2 = $_POST['numero2'];
if(isset($_POST['numero1']) && $_POST['numero2']){    
$suma = $n1 + $n2;
print($suma);

}





?>