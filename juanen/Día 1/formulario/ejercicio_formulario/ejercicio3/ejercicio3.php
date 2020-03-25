<!-- 3. Haz un formulario con radio button para elegir circulo, triangulo o cuadrado y calcular su area en cada caso.
De momento poner todos los input necesarios para poder hacer los cálculos. -->
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
include('./../../../tools/mis_funciones.php');
if(isset($_POST['area'])){  
    //Variables recogidas de la primera página web
    //Cuadrado
    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];
    //Circulo
    $radio = $_POST{'radio'};
    //Triangulo
    $semiperimetro = $_POST['semiperimetro'];
    $ladoA = $_POST['lado-a'];
    $ladoB = $_POST['lado-b'];
    $ladoC = $_POST['lado-c'];
    switch($_POST['area']){
        case "triangulo":
            escribe(a_triangulo($semiperimetro,$ladoA,$ladoB,$ladoC));
        break;
        case "circulo":
            escribe(a_circulo($radio));
        break;
        case "cuadrado":
            escribe(a_cuadrado($lado1,$lado2));
        break;
    }
}
?>
</body>
</html>