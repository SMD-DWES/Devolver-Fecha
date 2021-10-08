<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fecha</title>
    </head>
    <body>
        <form action="#" method="post">
            Fecha:
            <input type="text" name="iFecha" id="" placeholder="12-02-21">

            <input type="submit" value="Enviar" name="enviar[]">

        </form>
        
    </body>
</html>
<?php

    //Autor: Sergio Matamoros Delgado
    //Fecha: 8-10-21
    //Licencia: AGPL-3.0 License 

    //Importamos librerias
    require("meses.php");
    
    if(isset($_POST["enviar"])) {

        $fecha = $_POST["iFecha"];
    
        $meses = new Meses();

        echo "<h3>Resultado: ". $meses->getFechaNumerica($meses->getMeses(),$fecha)."</h3>";



    }
?>