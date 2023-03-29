<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="centrarCosillas.css">
    <link rel="stylesheet" href="background.css">
    <title>Fórmula Uno</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="inputs.css">
        <title>Formula Uno</title>
    </head>

    <body>
        
        <form action="formulaUno.php" method="post" id="formulaUno">
        <h1>Fórmula no.1</h1>
        <p>Ingresa el sistema de unidades:</p>
            <div class="centrarSelect">
            <select name="selectSistema" id="selectSistema" class="css-input">
                <option value="sistemaInternacional">Sistema Internacional</option>
                <option value="sistemaIngles">Sistema Ingles</option>
            </select>
           
            
            <p>Ingresa la velocidad final:</p>
            <input type="number" name="vf"  id="vf" step="any" class="css-input">
            <p>Ingresa la velocidad inicial:</p>
            <input type="number" name="vi"  id="vi" step="any" class="css-input">
            <p>Ingresa el tiempo:</p>
            <input type="number" name="tiempo"  id="tiempo" step="any" class="css-input">
            <br>
            <br>
            <div><button class="button" type="submit">Calcular</button></div>
            </div>
        </form>
        <!-- <br>
        <a href="index.html"><button class="button">Regresar</button></a> -->
        <script src="preventEmtpyUno.js"></script>
        
        <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $vf = $_POST["vf"];
            $vi = $_POST["vi"];
            $tiempo = $_POST["tiempo"];
            $sistema = $_POST["selectSistema"];


            $formula = (($vf + $vi) / 2) * $tiempo;

            if ($sistema == "sistemaInternacional") {
                echo '<p class="text">El desplazamiento es de '.$formula.' metros </p>';
            echo '<div class="centrar">';
            echo '<a href="indexDos.html"><button class="button">Regresar</button></a>';
            echo '</div>';
            } else {
                echo '<p class="text">El desplazamiento es de '.$formula.' pies </p>';
            echo '<div class="centrar">';
            echo '<a href="indexDos.html"><button class="button">Regresar</button></a>';
            echo '</div>';
            }
        }
        ?>
    </body>

    </html>
</body>

</html>