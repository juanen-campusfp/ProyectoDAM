<!-- 2. Teniendo dos input de type number, recogelos via post, sumalos y muestra el resultado.
Mediante el uso de reglas css, decore la respuesta dada. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./estilos/estilos.css">
</head>
<body>
<?php
$n1 = $_POST['numero1'];
$n2 = $_POST['numero2'];
if(isset($_POST['numero1']) && $_POST['numero2']){   

$suma = $n1 + $n2;
print("<div class = 'suma'>
            $suma
        </div>");

}





?>
</body>
</html>
