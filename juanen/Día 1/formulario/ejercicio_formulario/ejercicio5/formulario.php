<!-- 4. Diseñar un formulario web que pida la altura y el diámetro de un cilindro en metros.
Una vez el usuario introduzca los datos y pulse el botón calcular, deberá calcularse el volumen del cilindro y mostrarse el resultado en el navegador. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="./estilos/estilos.css">
    <script>
        function habilitar(){
        if(document.getElementById("casillas").checked == true){
        document.getElementById("enviar").disabled = false;
        }
        }
    </script>
</head>
<body>
    <form action="muestra.php" method="GET">
    <h1>Altura y diámetro de un cilindro en metros.</h1>
    Nombre : <input type = "text" name = "nombre" >
    Apellido : <input type = "text" name = "apellido" >
    Sexo : Mujer<input type = "radio" value = "Mujer" name = "sexo"> 
           Hombre<input type = "radio" value = "Hombre" name = "sexo"> 
    Correo Electrónico: <input type = "texto" name = "correo">
    <div id = "casillas">
        <input type = "checkbox" name = "casilla1">Deseo recibir información sobre novedades y ofertas
        <input type = "checkbox" name = "casilla2">Declaro haber leido y aceptar las condiciones generales del programa y la normativa sobre protección de datos
    </div>
    
    <div id = "enviar">
        <button  id = "enviar" type = "submit" disabled >enviar
    </div>
    </form>


</form>
    
</body>
</html>