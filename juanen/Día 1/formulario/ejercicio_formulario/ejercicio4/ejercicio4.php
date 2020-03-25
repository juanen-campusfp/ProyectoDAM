<!-- 4. Diseñar un formulario web que pida la altura y el diámetro de un cilindro en metros.
Una vez el usuario introduzca los datos y pulse el botón calcular, deberá calcularse el volumen del cilindro y mostrarse el resultado en el navegador. -->

<!DOCTYPE html>
<html lang="es">
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

if(isset($_POST['diametro'])){  
    $radio = ($_POST['diametro']/2);
    $altura = $_POST['altura'];
    $formula = M_PI * pow($radio,2) * $altura;
    escribe($formula);
}
?>
</body>
</html>