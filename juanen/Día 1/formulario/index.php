
<!DOCTYPE html>
<html>
     <!-- php Código (Averiguar si estoy en la primera carga de está página, tanto $_POST y $_GET , deben estar vacíos-->
 <?php
        $asterisco = "";
        $mensaje = "";
        //Variables para los campos del formulario
        $nombre = "";
        $correo = "";
        $telefono = "";
        $correo = "";
        $fecha = "";
        $check = "";
        if(empty($_GET) && empty($_POST)){
            //Estoy en primera carga
            $mensaje = "Estoy en primera carga";
        } else {
            $nombre = $_GET['nombre'];
            $correo = $_GET['correo'];
            $telefono = $_GET['telefono'];
            $fecha = $_GET['fecha'];
            $check =$_GET['check'];
        }
        ?>
    <head>
        <title>Mi formulario</title>
        <!-- Regla de estilo CSS para php -->
        <style>
                #mensaje {color:orange; }  
                #asterisco{ color:blue;
                    font-size:xx-large;
                    }
                #fallos {
                    color:red;
                }
        </style>
    </head>
    <body>
        <form action="./trataformulario.php" method="GET" enctype="multipart/form-data">
            <label for = "nombre">
                Nombre
            <input type = "text" id = "nombre" name = "nombre" minlength="2" maxlength="60" required value = "<?php print($nombre)?>">
                                                                    <!--Notas de información de validación  -->
                                                            <span id = "asterisco">
                                                                <?php if(isset($_GET['asterisco'])){
                                                                    print($_GET['asterisco']);
                                                                };?>
                                                            </span>
                                                            <span id ="mensaje">
                                                                <?php if(isset($_GET['mensaje'])){
                                                                    print($_GET['mensaje']);
                                                                };?>
                                                            </span>
            <!-- php -->
            <span id = "asterisco">
                <?php print($asterisco);?>
            </span>
            </label>
            <br>
            <label for = "telefono">
                telefono
             <input type = "tel" id = "telefono" name = "telefono"  required value = "<?php print($telefono)?>">
             </label>
             <br>
            <label for = "correo">
               eMail
            <input type = "email" id = "correo" name = "correo" minlength="3" maxlength="100" required value = "<?php print($correo)?>">
            </label>
            <br>
            <label for = "fecha">
                Fecha
             <input type = "date" id = "fecha" name = "fecha"  required value = "<?php print($fecha)?>">
             </label>
             <br>
             <label for = "check">
                Está vivo
             <input type = "checkbox" id = "check" name = "check" value = "1">
                                        <!--Notas de información de validación del check  -->
                                            <span id = "asterisco">
                                            <?php if(isset($_GET['asterisco_check'])){
                                                print($_GET['asterisco_check']);
                                            };?>
                                            </span>
                                            <span id ="mensaje">
                                            <?php if(isset($_GET['mensaje_check'])){
                                                print($_GET['mensaje_check']);
                                            };?>
                                            </span>
             </label>
             <br>
            <select name="ciudad" required>
            <option value ="Madrid" >Madrid</option>
            <option value = "Toledo">Toledo</option>
            <option value = "Huelva">Huelva</option>
            </select>
             <input type = "submit" value = "send">
             <br>
             <!-- FAllos de verificación de php -->
                                <span id ="fallos">
                                    <?php 
                                    print('FALLOS:'.'<br>');
                                    //Fallo nombre
                                    print($_GET['mensaje'].'<br>');
                                    //Fallo de check
                                    print($_GET['mensaje_check'].'<br>');
                                    //
                                    ?>
                                </span>
                                   
        </form>
    </body>
</html>

