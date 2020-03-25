<html>
    <head>
        <title>FIGURAS</title>
        <meta charset="UTF-8">
    </head>
    <body>
    
    <form action="formulario2.php" method="POST">
        CIRCULO<input CHECKED type="checkbox" id="circ" name="estado" value="a" onclick="ocultarcirculo()"> 
        CUADRADO<input type="checkbox" id="cuadra" name="estado" value="b"  onclick="ocultarcuadrado()">
        TRIANGULO<input type="checkbox" id="trian" name="estado" VALUE="c"  onclick="ocultartriangulo()"><BR><BR>
        <p id="text" style="display:none"><label>INSERTE RADIO DEL CIRCULO <input type="number" name="circ"></label></p>
        <p id="text2" style="display:none"><label>INSERTE BASE DEL CUADRADO <input type="number" name="cuadra"></label></p>
        <p id="text3" style="display:none"><label>INSERTE BASE DEL TRIANGULO <input type="number" name="trian"></label></p>
        <label>INSERTE ALTURA DEL CUADRADO O TRIANGULO <input type="number" name="alt"></label>
        <input type="submit" value="CALCULAR" name="boton">
    </form>
      
     <script>
        function ocultarcirculo() {
        var checkBox = document.getElementById("circ");
        var text = document.getElementById("text");
        if (checkBox.checked == true){
        text.style.display = "block";
        } else {
        text.style.display = "none";
        }
         }

         function ocultarcuadrado() {
        var checkBox = document.getElementById("cuadra");
        var text = document.getElementById("text2");
        if (checkBox.checked == true){
        text.style.display = "block";
        } else {
        text.style.display = "none";
        }
        }
         function ocultartriangulo() {
        var checkBox = document.getElementById("trian");
        var text = document.getElementById("text3");
        if (checkBox.checked == true){
        text.style.display = "block";
        } else {
        text.style.display = "none";
        }
         }
    </script>

</body>
</html>