<!-- 3. Haz un formulario con radio button para elegir circulo, triangulo o cuadrado y calcular su area en cada caso.
De momento poner todos los input necesarios para poder hacer los cálculos. -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="./estilos/estilos.css">
</head>
<body>
<form action="ejercicio3.php" method = "POST">
<h1>Introduce la Base y la altura y seleciona la siguiente figura</h1>
    <div id = "figuras">
    Circulo : <input type = "radio"  value = "circulo" name = "area">
<!-- Cajas ocultas , para introducir los datos del usuario cuando seleccione algo -->
    <div id = "circulo">
    Radio : <input type = "text" name = "radio">
    </div>
    Cuadrado : <input type = "radio"  value = "cuadrado" name = "area">
    <!-- Cajas ocultas , para introducir los datos del usuario cuando seleccione algo -->
    <div id = "cuadrado">
    Lado : <input type = "text" name = "lado1">
    Lado : <input type = "text" name = "lado2">
    </div>
    Triangulo : <input type = "radio"  value = "triangulo" name = "area">
     <!-- Cajas ocultas , para introducir los datos del usuario cuando seleccione algo -->
    <div id = "triangulo">
    Semiperímetro : <input type = "text" name = "semiperimetro">
    Lado (A): <input type = "text" name = "lado-a">
    Lado (B): <input type = "text" name = "lado-b">
    Lado (C): <input type = "text" name = "lado-c">
    </div>
<br>
   
<button type = "submit">enviar

</form>
    
</body>
</html>